<?php
namespace SearchEngine\Controllers\Article;

class Article
{
    public static function index($twig)
    {
        if (!empty($_GET['api']) && $_GET['api'] == true) {
            echo json_encode(\SearchEngine\Models\Article\Article::get());
        } else {
            return $twig->render('article.html.twig', []);
        }
    }
}