<?php

namespace App\Http\Controllers\Article;
//require_once '';

use Chenhua\MarkdownEditor\MarkdownEditor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Dao\ArticleDao;


class ArticleController extends Controller
{
    private $article_dao;

    function __construct()
    {
        $this->article_dao = new ArticleDao();
    }

    public function getArticles() {
        $ret = $this->article_dao->getArticlesByUser($user_id = 2);
        return view('article.article_list', ['article_list' => $ret]);
    }

    public function getArticle($article_id = 1) {
        $data = $this->article_dao->getArticleById($article_id);
        if ($data) {
            $markdown_text = MarkdownEditor::parse($data->content);
        } else {
            return 'Article Not Fund ~~~';
        }
        return view('article.article_detail', ['mark_down' => $markdown_text]);
    }


}
