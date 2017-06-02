<?php
namespace SearchEngine\Controllers\Article;

class Keyword
{
    public static function index()
    {
        echo json_encode(\SearchEngine\Models\Article\Keyword::get());
    }
}