<?
namespace classes\controllers;

use classes\models\Errors;


class ErrorsController
{
    public function actionIndex()
    {
        $model = new Errors();
        $home = $model->descrHome();
        $login = $model->logIn();
        $descr = $model->descrAuth();
        $about = $model->aboutAuth();
        $loginInvalid = $model->loginInvalid();
        //echo 'MainController::actionIndex()<br>';
        require_once __DIR__.'/../views/index5.php';
    }
    
    public function actionIndex1()
    {
        $model = new Errors();
        $home = $model->descrHome();
        $login = $model->logIn();
        $descr = $model->descrAuth();
        $about = $model->aboutAuth();
        $loginInvalid = $model->idInvalid();
        //echo 'MainController::actionIndex()<br>';
        require_once __DIR__.'/../views/index5.php';
    }
    
    public function actionIndex2()
    {
        $model = new Errors();
        $home = $model->descrHome();
        $login = $model->logIn();
        $descr = $model->descrAuth();
        $about = $model->aboutAuth();
        $loginInvalid = $model->cookieInvalid();
        //echo 'MainController::actionIndex()<br>';
        require_once __DIR__.'/../views/index5.php';
    }
    
    public function actionIndex3()
    {
        
        $model = new Errors();
        $home = $model->descrHome();
        $login = $model->logIn();
        $descr = $model->descrAuth();
        $about = $model->aboutAuth();
        $loginInvalid = $model->regInvalid();
        //echo 'MainController::actionIndex()<br>';
        require_once __DIR__.'/../views/index5.php';
    }
    
}