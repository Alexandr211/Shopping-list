<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Description</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
            integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
            integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
            crossorigin="anonymous"></script>
    
  
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

<div class="nav-item nav-link active">
    
<?php 
                   
if(!empty($auth)):                    
include'nick.php';
                    
print ("Hi, ".$nick2);
    
endif;
?>   
</div>   
                
<?php
foreach ($home as $val)
{
    echo $val;
}
                    
if(!empty($login)):                      
foreach ($login as $val)
{
    echo $val;
}
endif;
                    
foreach ($about as $val)
{
    echo $val;
}

if(!empty($logout)):                    
foreach ($logout as $val)
{
    echo $val;
}
endif;
?>
                    
                    
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="jumbotron jumbotron-fluid">
  <div class="container">
   
    <h2 class="display-5">The shopping list V1.0</h2>
    <p class="lead"> The Shopping list is a web service for the convenience of Your shopping and calculation of savings. <br><br>The functionality of the service includes: <br>1.adding and removing purchases.  <br>2.calculation of the number and cost of purchases.<br>3.the ability to authorize, modify and store the shopping list in the database.<br>4.the shopping list could be automatically added from non authorized users to the database during authorization.  <br>5.  Calculation of savings upon purchase.<br><br>Have a good shopping!  </p>
  </div>
</div>
      
          
    </main>
    <footer></footer>
</div>

</body>
</html>