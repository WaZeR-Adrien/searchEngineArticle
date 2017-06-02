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

    public static function getByKeyword($keyword)
    {
        return Database::query(
            'SELECT * FROM article, assigned, keyword
                      WHERE assigned.article_id = article.id
                      AND assigned.keyword_id = keyword.id
                      AND keyword.word = ?', [$keyword]
        );
    }
}