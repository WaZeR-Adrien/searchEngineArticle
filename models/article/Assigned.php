<?php
namespace SearchEngine\Models\Article;
use SearchEngine\Config\Database;

class Assigned
{
    public static function get($param = null)
    {
        if (!empty($param->id)) {
            return Database::getById($id, 'assigned');

        } elseif (!empty($param->article)) {
            return Database::query(
                'SELECT * FROM assigned WHERE article_id = ?',
                [$param->article]
            );

        } elseif (!empty($param->keyword)) {
            return Database::query(
                'SELECT * FROM assigned WHERE keyword_id = ?',
                [$param->keyword]
            );

        } else {
            return Database::query('SELECT * FROM assigned');
        }
    }
}