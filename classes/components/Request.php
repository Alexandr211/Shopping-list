<?php

namespace classes\components;

class Request
{
    public $controller = 'main';
    public $action = 'index';
    public $namespaceController = '\classes\controllers';

    public function init()
    {
        //Получение запроса, начиная от корневой директории виртуального хоста 
        $uri = $_SERVER['REQUEST_URI'];
        //echo $uri;

        //Выборка 1 и 2 элементов массива скрипта (test/index.php) с присваиванием значений переменным controller, action
        
        // explode - Разбивает строку с помощью разделителя
        $path = explode('/', $uri);
         //echo $path[0];
        if(count($path) == 2){
            if(!empty($path[1])){
                $this->controller = $path[1];
            }
        } else {
            if(!empty($path[1])){
                $this->controller = $path[1];
            }

            if(!empty($path[2])){
                $actionName = $path[2];
// mb_strpos - Поиск позиции первого вхождения одной строки в другую
                if(mb_strpos($actionName, '?') !== false)
                {
   //mb_substr - Возвращает часть строки                 
                    $actionName = mb_substr($actionName, 0, mb_strpos($actionName, '?'));
                }
                $this->action = $actionName;
            }
        }
        $this->callController();
    }

    protected function callController()
    {
        //echo 'Контроллер: '.$this->controller.'<br>';
        //echo 'Action: '.$this->action.'<br>';
       
        
        $classController = $this->namespaceController . '\\' .       
        ucwords($this->controller) . 'Controller';
        // ucwords — Преобразует в верхний регистр первый символ каждого слова в строке     
        $actionMethod = 'action' . ucwords($this->action);
        
        //echo $classController;
        
        //Передача в autoload.php имени класса контроллера, подключение одноименного файла, создание одноименного экземпляра класса
        if(class_exists($classController)){
            $controllerInstance = new $classController;
            
        } else {
            echo 'Класса контроллера не существует!';
           
            //Выход с кодом ошибки 1
            exit(1);
        }
         //Если метод в классе существует, то инициализируем его
        if(method_exists($controllerInstance, $actionMethod)){
            call_user_func_array([$controllerInstance, $actionMethod], []);
        } else {
            echo 'Метод контроллера не существует!!!';
            exit(1);
        }
    }
}