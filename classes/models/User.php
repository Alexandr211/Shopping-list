<?php

namespace classes\models;
//метод для отображения результатов на странице
    class User
{
    public function getUsers()
    {
        return [
            'Anna',
            'Olga'
        ];
    }


    public function descrHome()
{
    return ['<a class="nav-item nav-link" href="../main1">Home</a>'];
}

    public function descrAuth()
    {
       return ['<a class="nav-item nav-link" href="../descr/index1">Description</a>'];
    }
    
    public function aboutAuth()
    {
        return ['<a class="nav-item nav-link" href="../about/index1">About author<span class="sr-only"></span></a>'];
    }
    
    public function logOut()
    {
        return['<a class="nav-item nav-link" href="../main2">Logout</a>'];
    }
    
    public function Auth()
    { 
      return 1;
   }
}

