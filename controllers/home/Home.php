<?php
namespace SearchEngine\Controllers\Home;

class Home
{
    public static function index($twig)
    {
        $array = [
            'welcome' => 'Hello, welcome at all :)'
        ];

        return $twig->render('home.html.twig', $array);
    }
}