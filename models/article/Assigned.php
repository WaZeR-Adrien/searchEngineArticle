<?php
namespace SearchEngine\Models\Article;
use SearchEngine\Config\Database;

class Assigned
{
    public static function get($id = null)
    {
        if (empty($id)) {
            return Database::query('SELECT * FROM assigned');
        } else {
            return Database::getById($id, 'assigned');
        }
    }
}