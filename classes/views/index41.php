<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../styleLogin.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
            integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
            integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
            crossorigin="anonymous"></script>
      
   <!--<script src="ajax/ajax.js"></script>-->
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script> 
   
  <script src="../valid.js"></script>
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
                    <a class="nav-item nav-link" href="../main">Home</a>
                    <a class="nav-item nav-link" href="../login/index">Login</a>
                    <a class="nav-item nav-link" href="../descr/index">Description</a>
                    <a class="nav-item nav-link" href="../about">About author<span class="sr-only">(current)</span></a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        
   <div id="wrapper1">
    <div class="user-iconTwo"></div>
    <div class="pass-icon"></div>
	


<form id="ajax_form" name="login-form" id="ajax_form" class="login-form" action="../enter/index1" method="post" onsubmit="return checkPass()">

    <div class="header">
		<h1>Registration</h1>
		<span>Please, enter your registration details </span>
    </div>

    <div class="content">
		<input name="username" type="text" class="input username" value="Enter the username" onfocus="this.value=''" />
		<span id="psdSpan">Enter the password </span>
		<input name="password" type="password" id = "psd" class="input password" value="Пароль еще раз" onfocus="this.value=''" />
       <span>Enter the password again</span>
        <input name="password1" type="password" id = "psd1" class="input password1" value="Пароль еще раз" onfocus="this.value=''" />
    </div>

    <div class="footer">
		<input type="submit" name="submit" value="Register" id = "submit" class="button registr" />
		<!--<a class="register" href="registration/index">Регистрация</a>
		<input type="submit" name="submit" value="Регистрация" class="register" />-->
    </div>

</form>
</div>
<!--Причина проблемы с нажатием меню
<div class="gradient"></div>
-->

<script type="text/javascript">
$(document).ready(function() {
	$(".username").focus(function() {
		$(".user-iconTwo").css("left","-48px");
	});
	$(".username").blur(function() {
		$(".user-iconTwo").css("left","0px");
	});
	
	$(".password").focus(function() {
		$(".pass-icon").css("left","-48px");
	});
	$(".password").blur(function() {
		$(".pass-icon").css("left","0px");
	});
              
    });
</script>
 
 

 <br>

    <div id="result_form"><div>    
          
    </main>
    


</body>
</html>