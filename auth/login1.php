<?php
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
//функция для добавления в куки логина. Слэш в установке куки обязателен для доступности куки во всех директориях
function nick() {
$nick = $_POST['username']; 
setcookie("author", $nick, time() + 3600, "/");

//echo $nick2; 
}

function listing() {
$json = $_SESSION['json'];
$q = 2;
setcookie("q", $q, time() + 3600, "/");
setcookie("format1", $json, time() + 3600, "/");
//header('Location:../classes/views/index11.php'); exit; 
}

// Соединямся с БД
include ("bd.php");

if(isset($_POST['submit']))
{
    // Вытаскиваем из БД запись, у которой логин равняется введенному
    $query = mysqli_query($link,"SELECT user_id, user_password FROM users WHERE user_login='".mysqli_real_escape_string($link,$_POST['username'])."' LIMIT 1");
    $data = mysqli_fetch_assoc($query);

    // Сравниваем пароли
    if($data['user_password'] === md5(md5($_POST['password'])))
    {
        // Генерируем случайное число и шифруем его
        $hash = md5(generateCode(10));

   //     if(!empty($_POST['not_attach_ip']))
   //     {
            // Если пользователя выбрал привязку к IP
            // Переводим IP в строку
   //         $insip = ", user_ip=INET_ATON('".$_SERVER['REMOTE_ADDR']."')";
     //   }

        // Записываем в БД новый хеш авторизации и IP
        mysqli_query($link, "UPDATE users SET user_hash='".$hash."' WHERE user_id='".$data['user_id']."'");
                
        // Ставим куки
        $_SESSION['hash'] = $hash;
        $_SESSION['id'] = $data['user_id'];
            

     nick();
     
   // echo "<br>".$data['user_id'];
   // echo "<br>".$_SESSION['id'];
  //echo $_SERVER['DOCUMENT_ROOT'];
  
require "check1.php";    

//exit();
$true = 1;
//return $true;

    }
    else
    {
header('Location:/errors/index');
       // print "Sorry, but login or password is not correct!";
        
    }


}
?>