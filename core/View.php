<?php
// Класс для вывода шаблона
namespace Core;

class View {
    public function render(Page $page) {
        return $this->renderLayout($page, $this->renderView($page));
    }

    private function renderLayout(Page $page, $content) {
        $layoutPath = $_SERVER['DOCUMENT_ROOT'] . "/layouts/{$page->layout}.php";

        if(file_exists($layoutPath)){
            ob_start();
                $title = $page->title;
                include $layoutPath;
            return ob_get_clean();
        } else {
            exit("Не найден файл с разметкой по пути $layoutPath");
        }
    }

    private function renderView(Page $page) {
        if($page->view){
            $viewPath = $_SERVER['DOCUMENT_ROOT'] . "/views/{$page->view}.php";
            if(file_exists(($viewPath))) {
                ob_start();
                    $data = $page->data;
                    extract($data);
                    include $viewPath;
                return ob_get_clean();
            } else {
                exit("Не найден файл с представление по пути $viewPath");
            }
        }
    }
}