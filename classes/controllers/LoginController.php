<?
namespace classes\controllers;
use classes\models\Noname;
class LoginController
{
    public function actionIndex()
    {
        $model = new Noname();
        $data = $model->descrHome();
        $data1 = $model->descrAuth();
        $data2 = $model->aboutAuth();
        //echo 'MainController::actionIndex()<br>';
        require_once __DIR__.'/../views/index4.php';
    }
    
    public function actionRegistration()
    {
        
        //echo 'MainController::actionIndex()<br>';
        require_once __DIR__.'/../views/index41.php';
    }
    
    
}