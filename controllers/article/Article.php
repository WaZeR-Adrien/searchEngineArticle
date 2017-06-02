<?php
namespace SearchEngine\Controllers\Article;

class Article
{
    public static function index($twig)
    {
        if (!empty($_GET['api']) && $_GET['api'] == true) {
            $numberId = self::hydrate($_POST['keyword']);

            $articles = [];
            foreach ($numberId as $k => $v)
            {
                array_push($articles, \SearchEngine\Models\Article\Article::get($k));
            }
            echo json_encode($articles);
        } else {
            return $twig->render('article.html.twig', []);
        }
    }

    public static function hydrate($keywords)
    {
        // All keywords
        $keywords = explode(' ',$keywords);

        // Secure keywords
        foreach ($keywords as $k => $v)
        {
            $keywords[$k] = htmlspecialchars($v);
        }

        // Get id of articles
        $articleId = [];
        foreach ($keywords as $k => $v) {
            // Get article by the keyword enter
            foreach (\SearchEngine\Models\Article\Article::getByKeyword($v) as $row)
            {
                // Push id of article in the array articleId
                array_push($articleId, $row->article_id);
            }
        }
        // Count number of same value
        // Key as id
        // Value as the number of same value
        $nomberId = array_count_values($articleId);
        // Change order
        arsort($nomberId);

        return $nomberId;
    }
}