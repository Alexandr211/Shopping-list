$(function() {
      
    var cprice;
    var forma = {};
    var retval;
    var cookie;
    
   //устанавливаем переменную для модификации ключа cookie при каждой перезагрузке страницы 
    var q = 1;
    var s = 1;
       
   //вывод содержания объекта в alert
function alertObj(obj) { 
    var str = ""; 
    for(k in obj) { 
    str += k+": "+ obj[k]+"\r\n"; 
    } 
    alert(str); 
} 
    
   // Эффект зачеркивания при клике на строку
$(document).on('click','table input[type=checkbox]', function(){
	var $this = $(this);
    var $tr = $this.parents('tr');
        
if(this.checked) {
$tr.removeClass('row1');
$tr.addClass('rowcheck');


} else {
$tr.removeClass('rowcheck');
$tr.addClass('row1');
}

    });
    
$(document).on('click','table tr', function(event) {
if (event.target.type !== 'checkbox') {
$(':checkbox', this).click(); 
        }
    }); 

  // Открытие модального окна 
$('#add-list-item').on('click', function () {
                $('#search-list-item').modal ('show');
            });
    
  //Динамическое добавление новых покупок в список
$('#btn').on('click', function () {
        
        //Ниже счетчик строк   
var i = 1; 
var table = document.getElementById("mytab");
var trs = table.getElementsByTagName("tr");
for (var i = 1, row; row = table.rows[i]; i++) {
           }
        //alert(i);
        //alert($('#qual').val());
  
// Устанавливаем значение 0, если оно не задано
var qual = $('#qual').val(); 
var price = $('#price').val();
var product = $('#product').val();

 if (!$('#qual').val() > 0) {
   qual = 0;
     }
 if (!$('#price').val() > 0) {
   price = 0;  
 }
      
   //Записываем в Куки наименование товара, его цену и кол-во 
        
// запись введенных значений в объект forma

forma['product'+s] = product;
forma['price'+s] = price;
forma['qual'+s] = qual;
        s++;

        
        // добавляем покупки в таблицу
$('<tr class = "row1"><th scope="row"><input type="checkbox" id="button"></th><td id="calc">' + i + '</td><td>' + $('#product').val() + '</td><td>' + price +
'</td><td>' + qual + '</td><td></td></tr>').appendTo('#mytab');
  
        //Закрытие модального окна      
$('#search-list-item').modal('hide'); 
    
    //удаляем прежние cookie
for(var a = 1; a <= q; a++) {
$.cookie(("format"+a), null);
//console.log($.cookie("format"+a));
              }

     forma = {};
    
  //добавляем в cookie актуальный после удаления отдельных товаров список
table = document.getElementById("mytab");
trs = table.getElementsByTagName("tr");
var row = trs.length-1;
    //console.log(row);
for (var i = 1; i <= row; i++) {
      //console.log(table.rows[1]);
var tds = trs[i].getElementsByTagName("td");
      //console.log(tds);
forma['product'+i] = tds[1].innerHTML;
forma['price'+i] = tds[2].innerHTML;
forma['qual'+i] = tds[3].innerHTML;
}
n = 1;
$.cookie(("format"+n), JSON.stringify(forma));
forma = {};
       
        //Очищаем модальную форму от введенных значений
$("#product").val('');
$("#qual").val('');
$("#price").val('');
        
      // alert(cproduct);
     //  alert(cprice);
    
// После добавлении товара в список на странице, удаляем список покупок в БД, затем загружаем в БД актуальный список со страницы.
   
// передача объекта forma Post запросом в файл add.php
$.ajax({
method: "POST", // метод HTTP, используемый для запроса
url: "add.php", // строка, содержащая URL адрес
data: {
    add: "add"
},
success:
    function ( msg ) { // функции обратного вызова, которые вызываются если AJAX запрос выполнится успешно (если несколько функций, то необходимо помещать их в массив)
$( "#test" ).text( msg ); // добавляем текстовую информацию и данные возвращенные с сервера
	      },

});

        })
    
       // Исключение строк из списка
    
$('#btnDel').on('click', function(){
 
if($('input#button').is(':checked')) {
  //alert('good');
   var $this = $('input#button');
   var $tr = $this.parents('tr'); 
     //console.log($tr);
    $tr.find(":checkbox:checked").parent().parent().remove();
    
      //Проверяем правильность нумерации строк
     var i = 1; 
var table = document.getElementById("mytab");
var trs = table.getElementsByTagName("tr");
    //console.log(trs);
for (var i = 1, row; row = table.rows[i]; i++) {
      //alert(i);
var tds = trs[i].getElementsByTagName("td");
      //console.log(tds);
tds[0].innerHTML = i;
     
            }
   //считаем количество строк с товарами в начале
var table = document.getElementById("mytab");
var trs = table.getElementsByTagName("tr");
    
    //удаляем прежние cookie
for(var a = 0; a <= q; a++) {
$.cookie(("format"+a), null);
//console.log($.cookie("format"+a));
              }
//console.log(q);
    
    forma = {};
    
  //добавляем в cookie актуальный после удаления отдельных товаров список
table = document.getElementById("mytab");
trs = table.getElementsByTagName("tr");
var row = trs.length-1;
    //console.log(row);
for (var i = 1; i <= row; i++) {
      //console.log(table.rows[1]);
var tds = trs[i].getElementsByTagName("td");
      //console.log(tds);
forma['product'+i] = tds[1].innerHTML;
forma['price'+i] = tds[2].innerHTML;
forma['qual'+i] = tds[3].innerHTML;
}
$.cookie(("format"+1), JSON.stringify(forma));
forma = {};

//console.log($.cookie("format"+1)); 
}
   //alert($.cookie('forma')); 
   //console.log($.cookie('format'));

   //console.log(forma);
   //alertObj(forma);
    
   // передача объекта forma Post запросом в файл add.php
$.ajax({
method: "POST", // метод HTTP, используемый для запроса
url: "add.php", // строка, содержащая URL адрес
data: {
    del: "del"
},
success:
    function ( msg ) { // функции обратного вызова, которые вызываются если AJAX запрос выполнится успешно (если несколько функций, то необходимо помещать их в массив)
$( "#test" ).text( msg ); // добавляем текстовую информацию и данные возвращенные с сервера
	      },

});    

});
    
 // В случае перехода на другую страницу и последующего возврата, при перезагрузке страницы, достаем из cookie после построения документа и добавляем в таблицу 
    
$(document).ready(function() {

q = $.cookie("q");     
 
for(var i = 1; i <= q; i++) {
cookie = $.cookie("format"+i);
 //console.log(cookie);   
if (typeof(cookie) != "undefined" && cookie !== null) {
retval = JSON.parse(cookie);
//console.log(retval);
var object_length = Object.keys(retval).length;
//console.log(object_length);   
var number_object = object_length/3;
for(var j=1; j <= number_object; j++) {
var key1 = retval['product'+j];
var key2 = retval['price'+j];
var key3 = retval['qual'+j];
 //console.log(key2);  

$('<tr class = "row1"><th scope="row"><input type="checkbox" id="button"></th><td id="calc">' + j + '</td><td>' + key1 + '</td><td>' + key2 + '</td><td>' + key3 + '</td><td></td></tr>').appendTo('#mytab');

}

}
  
}
    
q++;
//console.log(q);
$.cookie(("q"), q);    
  
//console.log(q);
//console.log(number_object);  

         //Проверяем правильность нумерации строк
var i = 1; 
var table = document.getElementById("mytab");
var trs = table.getElementsByTagName("tr");
    //alert("trs");
for (var i = 1, row; row = table.rows[i]; i++) {
      //alert(i);
var tds = trs[i].getElementsByTagName("td");
      //console.log(tds);
tds[0].innerHTML = i;
            }
    
    
} );

});



