<?

namespace classes\controllers;

class Main2Controller
{
    public function actionIndex()
    {
        $q = $_COOKIE['q'];  // узнаем количество массивов с куки
        for ($j=1;$j<=$q;$j++)  {
        setcookie("format".$j, $json, time() - 3600, "/");
        //echo 'MainController::actionIndex()<br>';
        }
        require_once __DIR__.'/../views/index1.php';
    }
    
}