<?php
namespace Dao;
use Illuminate\Support\Facades\DB;

class ArticleDao {
    public function getArticlesByUser($user_id = 2) {
        $sql = <<<SQL
select c.cat_name, a.title, a.content
from articles a
       left join users u on a.user_id = u.id
       left join categories c on c.id = a.cat_id;
SQL;
        $ret = DB::select($sql);

        if ($ret) {
            return $ret;
        }
        return array();
    }
}