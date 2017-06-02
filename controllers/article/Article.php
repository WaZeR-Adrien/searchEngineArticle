<?php
namespace SearchEngine\Controllers\Article;

class Article
{
    public static function index($twig)
    {
        if (!empty($_GET['api']) && $_GET['api'] == true) {
            echo json_encode(\SearchEngine\Models\Article\Article::getByKeyword($_POST['keyword']));
        } else {
            return $twig->render('article.html.twig', []);
        }
    }

    public static function hydrate($datas)
    {

    }
}