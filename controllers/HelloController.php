<?php
namespace Controllers;
use \Core\Controller;
use Models\Hello;

class HelloController extends Controller {
    public function index() {
        $this->title = "Фреймворк работает";

        $hello = new Hello;

        return $this->render('hello/index');
    }
}