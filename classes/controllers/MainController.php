<?php

namespace classes\controllers;

class MainController
{
    public function actionIndex()
    {
       
        //echo 'MainController::actionIndex()<br>';
        require_once __DIR__.'/../views/index1.php';
    }
    

    public function actionInfo()
    {
        echo 'MainController::actionInfo()<br>';
    }
}