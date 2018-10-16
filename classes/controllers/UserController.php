<?php

namespace classes\controllers;

use classes\models\User;

class UserController
{
    public function actionIndex()
    {
        echo 'UserController::actionIndex()<br>';
    }

    public function actionInfo()
    {
        echo 'UserController::actionInfo()<br>';
      //Создание экземпляра класса, инициализация метода класса, отображение результата реализации метода на странице.
        $model = new User();
        $data = $model->getUsers();
        require_once __DIR__.'/../views/my.php';
    }
}