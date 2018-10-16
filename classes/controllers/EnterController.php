<?php

namespace classes\controllers;

class EnterController
{
    
    public function actionIndex()
    {
        include 'auth/login1.php';
        //echo $true;
   header('Location:/main1');
   require __DIR__.'/../views/index11.php'; 
}
    
public function actionIndex1()
    {
        include 'auth/register.php';
        //echo $true;
   header('Location:/main1');
   require __DIR__.'/../views/index11.php'; 
}    
}

?>