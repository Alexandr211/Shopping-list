<?php
session_start();
include 'bd.php';


 
if (isset($_SESSION['id']) and isset($_SESSION['hash']))
{
    $query = mysqli_query($link, "SELECT * FROM users WHERE user_id = '".intval($_SESSION['id'])."' LIMIT 1");
    $userdata = mysqli_fetch_assoc($query);
   
    if(($userdata['user_hash'] !== $_SESSION['hash']) or ($userdata['user_id'] !== $_SESSION['id']) )
    {     
        
        print "Oops, there are some problems... ";
    }
    else
    {
        
        //print "Привет, ".$userdata['user_login'].". Всё работает!";
        //print $_COOKIE['id'];
        //print $userdata['user_id'];

        // Далее забираем из КУКИ информацию списка покупок и добавляем ее в БД. Затем удаляем эту инфо из КуКи. Затем выводим инфо из БД на страницу и в КуКи.

 

$q = $_COOKIE['q'];  // узнаем количество массивов с куки 
//echo("<br/>Тест Куки Q из JS:".$q);  
for ($j=1;$j<=$q;$j++)  {

$item = json_decode($_COOKIE['format'.$j], true); // десериализация данных куки из строки обратно в массив    
//echo("<br/>Тест cookie из JS:".$item);
setcookie("format".$j, "", time()-100000,"/"); // удаляем куки 
    
if (!empty($item)) {  // если массив пустой, то не пускаем его дальше  

$object_length = count($item)/3;   // расчет количества строк с товарами   
//echo("<br/>Тест Куки из JS:".$item['product1']);
//echo("<br/>Тест количества записей из JS:".$object_length);
//echo $_COOKIE['format1'];  
for ($i=1;$i<=$object_length;$i++) { //вставка товаров в БД
  if (mysqli_query($link, "INSERT INTO list VALUES(NULL,".$userdata['user_id'].",'".$item['product'.$i]."',".$item['price'.$i].",".$item['qual'.$i].")") === TRUE) {
     // print("<br/>Данные в строку List'$i' успешно добавлены.");
      
}      

}
}
  }
   
//добавляем в КУки информацию из базы данных, затем открываем главную страницу.
  //print "Hallo"; 
  $user_id = $userdata['user_id'];
  $test=mysqli_query($link, "SELECT id FROM list WHERE `list`.`users_id`='{$user_id}'" ); 
  $num_rows = mysqli_num_rows( $test );      
   
//echo("<br/>Тест user_id из JS:".$user_id);
if ($num_rows >= 1)  {

$result =mysqli_query($link, "SELECT product, price, qual FROM list WHERE `list`.`users_id`='{$user_id}'");
$arr = array();

    //print ("{$row['product']}  {$row['price']} {$row['qual']}"); 
for ($i = 1; $i <= $num_rows; $i++) {
$row=mysqli_fetch_array($result);    
//print $row['product'];
$arr['product'.$i] = $row['product'];
$arr['price'.$i] = $row['price'];
$arr['qual'.$i] = $row['qual'];    
}
//print $arr['product1'];
 


$_SESSION['json'] = json_encode($arr);    
listing();
    
unset($arr);
    /* очищаем результирующий набор */
    mysqli_free_result($test);
    mysqli_free_result($result);
    

} 

//header("Location: page1open.php");
//require "page1open.php";
//exit();
//$true = 1;
 //return $true;       
  
}    
    }

else
{
    print "Check Cookie, please";
}
session_unset();
session_destroy();  
?>