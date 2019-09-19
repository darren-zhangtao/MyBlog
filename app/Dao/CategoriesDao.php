<?php
namespace Dao;
use Illuminate\Support\Facades\DB;
class CategoriesDao {
    //根据用户 id 获取所有分类，id 为 -1 时获取所有分类
    public function getAllCategoriesByUser($userId = 2) {
        $where = '';
        if ($userId != -1) {
            $where .= " and user_id = $userId";
        }
        $sql = <<<SQL
select u.name, c.cat_name
from categories c
inner join users u on c.user_id = u.id
where 1 {$where}
order by user_id
SQL;
        $ret = DB::select($sql);

        $data = array();
        if ($ret) {
            foreach ($ret as $item) {
                $data[$item->name][] = $item->cat_name;
            }
            return $data;
        }
        return array();
    }
}
