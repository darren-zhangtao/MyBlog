<?php

namespace App\Http\Controllers\Article;
//require_once '';

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Dao\ArticleDao;


class ArticleController extends Controller
{
    public function getArticles() {
        $article_dao = new ArticleDao();
        $data = $article_dao->getArticlesByUser(2);
//        var_dump($data);
        return view('article.article_detail');
    }
}
