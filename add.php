<?php
//информация в файл приходит от maket1.js by post ajax
//print ("Hello");

//Соединямся с БД
include 'auth/bd.php';
include 'nick.php'; 

//$test = $_POST['del'];

//echo $test;

// Добавление в список покупок, удаление из списка
if (isset($_POST['add']) or isset($_POST['del']))
{
   //$test = 5;
   //echo $test;
    
    //Экранирование данных пользователей для предотвращения SQL иньекции
$username = mysqli_real_escape_string($link, $nick2);
    //Получение Логина из БД
$auth = mysqli_query($link, "SELECT user_id FROM `users` WHERE `user_login`='{$username}'");
    // получаем массив с идентификатором польтзователя
$result = mysqli_fetch_assoc($auth);

        // ниже выводим идентификатор пользователя
    //echo $result['user_id']; 
    
$user_id = $result['user_id']; 

// удаляем из БД старый список покупок, затем достаем из cookie актуальный список покупок
if (mysqli_query($link, "DELETE FROM `list` WHERE `list`.`users_id`='{$user_id}'") === TRUE) {
     //echo("Данные в строке list удалены.");
} 

    // Далее забираем из КУКИ информацию списка покупок и добавляем ее в БД. 
$q = $_COOKIE['q'];  // узнаем количество массивов с куки 
//echo("Тест Куки Q из JS:".$q);  
for ($j=1;$j<=$q;$j++)  {

$item = json_decode($_COOKIE['format'.$j], true); // десериализация данных куки из строки обратно в массив    
//echo("<br/>Тест cookie из JS:".$item);
    
if (!empty($item)) {  // если массив пустой, то не пускаем его дальше  
$object_length = count($item)/3;   // расчет количества строк с товарами   
//echo("<br/>Тест Куки из JS:".$item['product2']);
//echo("<br/>Тест количества записей из JS:".$object_length);
//echo $_COOKIE['format1'];  
    
    //вставка товаров в БД
    for ($i=1; $i <= $object_length; $i++) { 
  if (mysqli_query($link, "INSERT INTO list VALUES(NULL,".$user_id.",'".$item['product'.$i]."',".$item['price'.$i].",".$item['qual'.$i].")") === TRUE) {
      
    //echo"Данные в Базу успешно добавлены.";  
      
}      

}
    
}
  }
    
}
    
    
?>