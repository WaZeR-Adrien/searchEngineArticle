<?php
namespace SearchEngine\Controllers\Home;
use SearchEngine\Models\Article\Article;

class Home
{
    public static function index($twig)
    {
        $array = [];

        return $twig->render('home.html.twig', $array);
    }
}