<?php
namespace SearchEngine\Models\Article;
use SearchEngine\Config\Database;

class Keyword
{
    public static function get($param = null)
    {
        if (!empty($param->id)) {
            return Database::getById($param->id, 'keyword');

        } else {
            return Database::query('SELECT * FROM keyword');
        }
    }
}