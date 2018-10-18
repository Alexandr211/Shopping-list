<?php

namespace classes\controllers;

class EnterController
{
    
    public function actionIndex()
    {
        include 'auth/login1.php';
        //echo $true;
        
  if($true == 1) {
      if($true2 == 1 and $true3 == 1) {
   header('Location:/main1');
   require __DIR__.'/../views/index11.php';   }
   }  
   
}
    
public function actionIndex1()
    {
        include 'auth/register.php';
        //echo $true;
if($true == 5)
 {
    if($true2 == 1 and $true3 == 1) {
   header('Location:/main1');
   require __DIR__.'/../views/index11.php'; }
}

}    
}

?>