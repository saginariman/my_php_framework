<?php
namespace Controllers;
use Core\Controller;
use Models\News;

class NewsController extends Controller {
    public function get() {
        $this->title = 'Главная страница';

        $newsModel = new News;

        $data = $newsModel->getAll();

        return  $this->render('main/index', ["news"=>$data]);
    }

    public function getOne($params) {
        $id = $params["id"];
        $newsModel = new News;

        $data = $newsModel->getById($id);

        $this->title = $data['title'];

        return  $this->render('main/news_detail', $data);
    }
}