<?php
namespace SearchEngine\Controllers\Article;

class Assigned
{
    public static function index()
    {
        if (!empty($_GET['article_id']) || !empty($_GET['keyword_id'])) {
            $param = new \StdClass();
            $param->article = $_GET['article_id'];
            $param->keyword = $_GET['keyword_id'];
            echo json_encode(\SearchEngine\Models\Article\Assigned::get($param));
        } else {
            echo json_encode(\SearchEngine\Models\Article\Assigned::get());
        }
    }
}