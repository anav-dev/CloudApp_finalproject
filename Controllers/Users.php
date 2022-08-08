<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data=[];
        
        echo view('templates/header', $data);
		echo view('login');
		echo view('templates/footer');
        
    }
    
     public function register()
    {
        $data=[];
        
        echo view('templates/header', $data);
		echo view('register');
		echo view('templates/footer');
        
    }
}
