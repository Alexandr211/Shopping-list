<?
session_start();
// Функция для генерации случайной строки
    function generateCode($length=6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
    }

function listing() {
$json = $_SESSION['json'];
$q = 2;
setcookie("q", $q, time() + 3600, "/");
setcookie("format1", $json, time() + 3600, "/");
//header('Location:../classes/views/index11.php'); exit; 
}

// Соединяемся с БД
include 'bd.php';
       
if(isset($_POST['submit']))
{
    $err = [];

    // проверям логин
    if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['username']))
    {
        $err[] = "Login can consist only of letters of the English alphabet or in the form of numbers!";
    }

    if(strlen($_POST['username']) < 3 or strlen($_POST['username']) > 30)
    {
        $err[] = "Login must be at least 3 characters and not more than 30!";
    }

    // проверяем, не существует ли пользователя с таким именем
    $query = mysqli_query($link, "SELECT user_id FROM users WHERE user_login='".mysqli_real_escape_string($link, $_POST['username'])."'");
    if(mysqli_num_rows($query) > 0)
    {
        $err[] = "A User with this login already exists in the database!";
    }

    // Если нет ошибок, то добавляем в БД нового пользователя
    if(count($err) == 0)
    {
        $login = $_POST['username'];
        setcookie("author", "", time() - 3600, "/");
        setcookie("author", $login, time() + 3600, "/");
        $psd = $_POST['password'];
        // Убираем лишние пробелы и делаем двойное хеширование
        $password = md5(md5(trim($_POST['password'])));
        
         // Генерируем случайное число и шифруем его
        $hash = md5(generateCode(10)); 
        
        mysqli_query($link,"INSERT INTO users (user_login, user_password, user_hash) VALUES ('".$login."', '".$password."', '".$hash."')");
        
        $user_id = mysqli_query($link, "SELECT user_id FROM users WHERE user_login='".mysqli_real_escape_string($link, $_POST['username'])."'");
           // ->fetch_assoc()['user_id'];
        
        $id = mysqli_fetch_assoc($user_id); 
         
        $_SESSION['hash'] = $hash;
        $_SESSION['id'] = $id['user_id'];
        
        
              
    //print "Привет, ".$login.". Всё работает! Ваш пароль: $psd";
      
   
    require "check1.php";    
    }
    else
    {
        print "<b>The following errors occurred during registration:</b><br>";
        foreach($err AS $error)
        {
            print $error."<br>";
        }
    }
}
?>