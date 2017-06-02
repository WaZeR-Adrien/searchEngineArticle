<?php
namespace SearchEngine\Models\Article;
use SearchEngine\Config\Database;

class Article
{
    public static function get($id = null)
    {
        if (empty($id)) {
            return Database::query('SELECT * FROM article');
        } else {
            return Database::getById($id, 'article');
        }
    }
}