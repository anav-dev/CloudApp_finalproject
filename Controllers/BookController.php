<?php

namespace App\Controllers;

use App\Models\BookModel;


class BookController extends BaseController
{
	var $dbModel;

    //load database in contructor
    public function __construct()
    {
        $this->dbModel = new BookModel();
    } 

    public function create(){
        echo view('templates/header');
        echo view('book-reg-create');
        echo view('templates/footer');
    }
    public function store(){
        $data=[
            'name'=>$this->request->getVar('n'),
            'author'=>$this->request->getVar('a'),
            'year'=>$this->request->getVar('y'),
            'topic'=>$this->request->getVar('t'),
            'status'=>$this->request->getVar('st'),
            
            
        ];
       	$this->dbModel->insert($data);
        // Redirect to signup view page after inserting new user    
        return $this->response->redirect(site_url('book-reg-view'));
    }
    public function bookView(){
        echo view('templates/header');		
        $data['u'] = $this->dbModel->findAll();        
        echo view('book-reg-view', $data);
        echo view('templates/footer');            
    }

    public function updateBook($id){
        echo view('templates/header');
        
        $data['user_obj'] = $this->dbModel->where('id', $id)->first();
        return view('book-reg-update', $data);
       
         echo view('templates/footer');
    }
    
    public function update1Book(){
        $id = $this->request->getVar('id');
        $data = [
            'name' => $this->request->getVar('n'),
            'author' => $this->request->getVar('a'),
             'year'=>$this->request->getVar('y'),
             'topic'=>$this->request->getVar('t'),
            'status'=>$this->request->getVar('st'),
        ];
        $this->dbModel->update($id, $data);
        return $this->response->redirect(site_url('/book-reg-view'));
    }
    
    public function deleteBook($id = null){
        $this->dbModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/book-reg-view'));
        
    }
}