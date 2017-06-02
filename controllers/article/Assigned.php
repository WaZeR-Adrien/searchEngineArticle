<?php
namespace SearchEngine\Controllers\Article;

class Assigned
{
    public static function index()
    {
        echo json_encode(\SearchEngine\Models\Article\Assigned::get());
    }
}