<?php
namespace SearchEngine\Models\Article;
use SearchEngine\Config\Database;

class Article
{
    public static function get($id = null)
    {
        if (!empty($id)) {
            return Database::query('SELECT title FROM article WHERE id = ?',[$id])[0];

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
                      AND keyword.word LIKE "%' . $keyword . '%"
                      OR soundex(keyword.word) = soundex("'. $keyword .'")'
        );
    }
}