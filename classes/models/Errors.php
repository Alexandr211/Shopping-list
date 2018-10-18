<?php

namespace classes\models;
//метод для отображения результатов на странице
class Errors
{
    public function loginInvalid()
    {
        $p = 'Sorry, but login or password is not correct!';
        return [$p];
    }
    
    public function idInvalid()
    {
        $p = 'Oops, there are some problems...!';
        return [$p];
    }
    
    public function cookieInvalid()
    {
        $p = 'Check Cookie, please!';
        return [$p];
    }
    
  public function regInvalid()
    {
      include 'auth/register.php';
      //return [$err[1]];  
      //testErr();
      $s = $_SESSION['errs'];
      return $s;      
    } 
    
    public function descrHome()
{
    return ['<a class="nav-item nav-link" href="../main">Home</a>'];
}

    public function descrAuth()
    {
       return ['<a class="nav-item nav-link" href="../descr/index1">Description</a>'];
    }
    
    public function aboutAuth()
    {
        return ['<a class="nav-item nav-link" href="../about/index1">About author<span class="sr-only"></span></a>'];
    }
    
   public function logIn()
    {
       return ['<a class="nav-item nav-link" href="../login/index">Login</a>'];
    }
    
   public function Auth()
    { 
      return 1;
   }
    

}

