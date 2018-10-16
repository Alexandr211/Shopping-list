<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>The shopping list</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>-->
    
     <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
            integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
            integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
            crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="jquery.cookie.js"></script>
   
    <script src="maket.js"></script>
    
     <script src="sum.js"></script>
     
</head>
<body>
<div id="wrapper" class="container-fluid">
    <header>
        <nav class="navbar navbar-expand-xl navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Shopping list</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="login/index">Login</a>
                   <a class="nav-item nav-link" href="descr/index">Description</a> 
                    <a class="nav-item nav-link" href="about/index">About author</a>
                    
                   
                    
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="buy-list">
          
    
            
    <!--Таблица товаров-->
            
  <table  id="mytab" class="table table-hover" onmouseover = "myFunction()" >
  
  <thead>
    <tr style="font-size: 15px; color:#000080; text-transform: none;">
     <th scope="col"></th>
      <th scope="col">#</th>
      <th scope="col">Product</th>
      <th scope="col">Price</th>
      <th scope="col">Nr</th>
      <th scope="col">Sum</th>
    </tr>
  </thead>
   
   <tbody>
    <!--Здесь строки с товаром-->
            
  </tbody>
  
</table>
      <table id="totaltab" class="table table-hover">    
           <thead>
    <tr style="font-size: 15px; color:#000080;">
     <th scope="col">PLANNED AMOUNT</th>
      <th id = "planned" scope="col" style = "width: 83px;" ></th>
      
    </tr>
    <tr style="font-size: 15px; color:#000080;">
     <th scope="col">AMOUNT SPENT</th>
      <th scope="col"><form  style = "margin-top: 0px;" name="test" method="post" action="#">
  <input id = "spent" style="border: 0; color:#FF0000; font-weight:bold;" type="text" size="6" onmouseout="spentFunction()"> 
 </form></th>
      
    </tr>
    <tr style="font-size: 15px; color:#000080;">
     <th scope="col">SAVING AMOUNT</th>
      <th id = "save" scope="col"></th>
      
    </tr>
  </thead>
             </table>  
            
             <!--Test Button 
             
              <input type="button" name="123" id="table" onclick="myFunction()" value="TEST Summa" >
               -->
        <!--Кнопка исключения из списка-->
               <div id="add-list-item1">
                <button id = "btnDel" class="btn btn-primary btn-lg"><i class="fa fa-minus" aria-hidden="true"></i></button>
            </div>
            <div class="zero"></div>
    <!--Кнопка добавления в список-->
                <div id="add-list-item">
                <button class="btn btn-primary btn-lg"><i class="fa fa-plus" aria-hidden="true"></i></button>
            </div>              
           
        </div>
        
        <!--Форма добавления товаров-->
        <div id="search-list-item" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <form action="#">
                            <div class="input-group">
                                <input type="text" class="form-control" id = "product" placeholder="Enter the Product">
                                 <input type="text" class="form-control1" id = "price" placeholder="Price">
                                 <input type="text" class="form-control1" id = "qual" placeholder="Nr">
                                <span class="input-group-btn">
                                <button id="btn" class="btn btn-primary" type="button">Add</button>
                            </span>
                            </div>
                        </form>
                    </div>
                    
                        <div class="modal-footer">
                        <button type="button" id="modalHide" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer></footer>
</div>

</body>
</html>