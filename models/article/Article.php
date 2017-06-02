<?php
namespace SearchEngine\Models\Article;
use SearchEngine\Config\Database;

class Article
{
    public static function get($param = null)
    {
        if (!empty($param->id)) {
            return Database::getById($param->id, 'article');

        } else {
            return Database::query('SELECT * FROM article');
        }
    }
}