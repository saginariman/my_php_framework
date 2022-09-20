<?php
// Класс для вызова нужного контроллера и передачи данных ввиде объекта Page
namespace Core;

class Dispatcher {
    public function getPage(Track $track) {
        $className = ucfirst($track->controller) . 'Controller';
        $fullName = "\\Controllers\\$className";

        try{
            $controller = new $fullName;

            if(method_exists($controller, $track->action)){
                $result = $controller->{$track->action}($track->params);

                if($result) {
                    return $result;
                }else {
                    return new Page('default');
                }
            } else {
                exit("Метод <b>{$track->action}</b> не найден в классе $fullName.");
            }
        }catch(\Exception $e) {
            exit($e->getMessage());
        }
    }
}