<?php
// Класс роутер, который определяет какой контроллер вызвать, перебирая массив routes, и выдает нужный для заданного URI
namespace Core;

class Router {
    public function getTrack($routes, $uri) {
        foreach($routes as $route) {
            $pattern = $this->createPattern(trim($route->path, '/'));

            // Проверяем адрес URI на соотвествие ругулярку... Если URI подойдет по регулярку, в $params будут записаны параметры
            if(preg_match($pattern, trim($uri, '/'), $params)){
                $params = $this->clearParams($params); //очищаем параметры от элементов с числовыми клячами. Убераем лишние переданные параметры
                return new Track($route->controller, $route->action, $params);
            }
        }

        return new Track('error', 'notFound');
    }

    /* 
     * Метод преобразует путь из роута в регулярку, подставляя вместо параметров роута (:var1) именованные карманы (?<var1>[^/]+)
     * к примеру, из адреса '/test/:var1/:var2/' метод сделает регулярку '#^/test/(?<var1>[^/]+)/(?<var2>[^/]+)/?$#'
    */

    private function createPattern($path){
        return '#^' . preg_replace('#/:([^/]+)#', '/(?<$1>[^/]+)', $path) . '/?$#';
    }

    /*
     * Функция убирает лишние переданные параметры.
     * Например, если в $route->path = /news/:id/ , а в uri /news/1/2/3, то последние два параметра не будут передаваться в контроллер, так как их параметры не указаны в самом пути /news/:id/
    */
    private function clearParams($params){
        $result = [];

        foreach($params as $key => $param){
            if(!is_int($key)){
                $result[$key] = $param;
            }
        }

        return $result;
    }

}