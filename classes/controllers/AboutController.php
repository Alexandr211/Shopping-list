<?
namespace classes\controllers;
use classes\models\Noname;
use classes\models\User;

class AboutController
{
    public function actionIndex()
    {
        $model = new Noname();
        $home = $model->descrHome();
        $login = $model->logIn();
        $descr = $model->descrAuth();
        //echo 'MainController::actionIndex()<br>';
        require_once __DIR__.'/../views/index3.php';
    }
    
    public function actionIndex1()
    {
        $model = new User();
        $auth = $model->Auth();
        $home = $model->descrHome();
        $descr = $model->descrAuth();
        $logout = $model->logOut();
        //echo 'MainController::actionIndex()<br>';
        require_once __DIR__.'/../views/index3.php';
    }
}