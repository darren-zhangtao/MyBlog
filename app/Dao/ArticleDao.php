<?php
namespace Dao;
use Illuminate\Support\Facades\DB;

class ArticleDao {
    public function getArticlesByUser($user_id = 2) {
        $sql = <<<SQL
select ar.id,
       ar.created_at,
       c.cat_name,
       ab.title,
       ab.abstract,
       ab.img
from abstract ab
       inner join articles ar on ab.article_id = ar.id
       inner join categories c on ar.cat_id = c.id
where ar.user_id = $user_id;
SQL;
        $ret = DB::select($sql);

        if ($ret) {
            return $ret;
        }
        return array();
    }

    public function getArticleById($article_id) {
        $sql =<<<SQL
SELECT title, content
from articles
where id = "$article_id"
  and is_delete = 0;
SQL;
        $ret = DB::select($sql);
        if ($ret) {
            return reset($ret);
        }
        return array();

    }
}