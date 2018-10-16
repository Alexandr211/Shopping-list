<?php
namespace classes\models;

class Noname
{
    public function descrHome()
{
    return ['<a class="nav-item nav-link" href="../main">Home</a>'];
}
    public function descrAuth()
    {
       return ['<a class="nav-item nav-link" href="../descr/index">Description</a>'];
    }
    
    public function aboutAuth()
    {
        return ['<a class="nav-item nav-link" href="../about/index">About author<span class="sr-only"></span></a>'];
    }
    
     public function logIn()
    {
       return ['<a class="nav-item nav-link" href="../login/index">Login</a>'];
    }
    
    
    
}