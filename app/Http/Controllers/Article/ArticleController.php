<?php

namespace App\Http\Controllers\Article;
//require_once '';

use Chenhua\MarkdownEditor\MarkdownEditor;
use Dao\CategoriesDao;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Dao\ArticleDao;


class ArticleController extends Controller
{
    private $article_dao;
    private $categoriesDao;

    function __construct()
    {
        $this->article_dao = new ArticleDao();
        $this->categoriesDao = new CategoriesDao();
    }

    public function getArticles() {
        $articles = $this->article_dao->getArticlesByUser($user_id = 2);
        $categories = $this->categoriesDao->getAllCategoriesByUser(-1);
        var_dump($categories);
        return view('article.article_list', array(
            'article_list' => $articles,
            'category_list' => $categories,
        ));
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
