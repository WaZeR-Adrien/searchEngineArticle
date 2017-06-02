<?php
namespace SearchEngine\Controllers\Home;
use SearchEngine\Models\Article\Article;

class Home
{
    public static function index($twig)
    {
        /*$url = 'http://searchengine-article.dev/api/keyword';
        if(function_exists('curl_version')){
            $curl = curl_init($url);
            $response = curl_exec($curl);
        } else {
            $response = file_get_contents($url);
        }*/

        $array = [
            /*'keyword' => json_decode($response)*/
        ];

        return $twig->render('home.html.twig', $array);
    }
}