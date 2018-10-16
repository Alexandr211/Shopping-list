<?php

namespace classes\base;

use classes\components\Request;
//Синглтон
class App
{
    /** @var self */
    public static $app;

    //Компонент Request;
    /** @var  Request */
    public $request;

    private function __construct(){}
    private function __wakeup(){} //serialize
    private function __clone(){} //Защита от клонирования

    public static function run($config = null)
    {
        if(empty(self::$app)){
            self::$app = new self();
            self::$app->request = new Request();
            self::$app->request->init();
        }
        return self::$app;
    }


    public function test()
    {
        echo 'test';
    }
}