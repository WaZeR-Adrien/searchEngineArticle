<?php
namespace SearchEngine\Models\Article;
use SearchEngine\Config\Database;

class Keyword
{
    public static function get($id = null)
    {
        if (empty($id)) {
            return Database::query('SELECT * FROM keyword');
        } else {
            return Database::getById($id, 'keyword');
        }
    }
}