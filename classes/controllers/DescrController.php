<?
namespace classes\controllers;

use classes\models\Noname;
use classes\models\User;

class DescrController
{
    public function actionIndex()
    {
        $model = new Noname();
        $home = $model->descrHome();
        $login = $model->logIn();
        $about = $model->aboutAuth();
        //echo 'MainController::actionIndex()<br>';
        require_once __DIR__.'/../views/index2.php';
    }
    
    public function actionIndex1()
    {
        $model = new User();
        $auth = $model->Auth();
        $home = $model->descrHome();
        $about = $model->aboutAuth();
        $logout = $model->logOut();
        //echo 'MainController::actionIndex()<br>';
        require_once __DIR__.'/../views/index2.php';
    }
}