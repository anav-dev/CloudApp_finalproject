<?php

namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class SignUp_Controller extends Controller
{
    var $dbModel;

    //load database in contructor
    public function __construct()
    {
        $this->dbModel = new UserModel();
    } 

    // VIEWERS
    public function signup(){
        echo view('templates/header');
        echo view('signup');
        echo view('templates/footer');
    }
    
    public function addNewUser(){ 
        $data=[
            'username'=>$this->request->getVar('username'),
            'email'=>$this->request->getVar('email'),
            'password'=>$this->request->getVar('password'),
            'gender'=>$this->request->getVar('gender'),
        ];

        $this->dbModel->insert($data);
        // Redirect to signup view page after inserting new user    
        return $this->response->redirect(site_url('signup-view'));
    }

    public function signUpView(){
        echo view('templates/header'); 
        try {
            $data['u'] = $this->dbModel->findAll();
            echo view('signup-view', $data);
            //echo view('signup-view');
        } catch (Exception $e) {
            echo view('signup-view');
        }
        echo view('templates/footer'); 
    }
    
    public function update($id = null){
        echo view('templates/header');
        $data['user_obj'] = $this->dbModel->where('id', $id)->first();
        echo view('signup-update', $data);
        echo view('templates/footer');
    }
    
    public function update1(){
        $id = $this->request->getVar('id');
        $data = [
            'username'=>$this->request->getVar('username'),
            'email'=>$this->request->getVar('email'),
            'password'=>$this->request->getVar('password'),
            'gender'=>$this->request->getVar('gender'),
        ];
        $this->dbModel->update($id, $data);
        return $this->response->redirect(site_url('/signup-view'));
    }
    
    public function delete($id = null){
        $this->dbModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/signup-view'));        
    }
}
