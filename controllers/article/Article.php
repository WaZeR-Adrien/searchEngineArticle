<?php
namespace SearchEngine\Controllers\Article;

class Article
{
    public static function index($twig)
    {
        if (!empty($_GET['api']) && $_GET['api'] == true) {
            echo json_encode();
        } else {
            return $twig->render('article.html.twig', []);
        }
    }
}