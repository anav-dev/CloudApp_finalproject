<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class mycontroller extends controller
{

    public function login()
    {
        echo view('templates/header');
		echo view('login');
		echo view('templates/footer');        
    }
    
    public function register()
    {
        echo view('templates/header');
		echo view('register');
		echo view('templates/footer');
    }
    
    public function about(){
        echo view('templates/header');
		echo view('about');
		echo view('templates/footer');
    }
    
    public function books(){
        echo view('templates/header');
		echo view('books');
		echo view('templates/footer');
    }
    
    public function contact(){
        echo view('templates/header');
		echo view('contact');
		echo view('templates/footer');
    }
    
    public function validation(){
        return view('validation');
    }
    
    public function signup(){
        echo view('templates/header');
		echo view('signup');
		echo view('templates/footer');
    }
    
     public function index(){
        echo view('templates/header');
		echo view('index');
		echo view('templates/footer');
    }
     public function session(){
        echo view('templates/header');
		echo view('session');
		echo view('templates/footer');
    }
    
     public function profile(){
        echo view('templates/header');
		echo view('profile');
		echo view('templates/footer');
    }
    
     public function logout(){
        echo view('templates/header');
		echo view('logout');
		echo view('templates/footer');
    }

    public function bookreserved(){
        echo view('reserve-book-add');
    }
        
   
}