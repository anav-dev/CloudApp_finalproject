<?php

namespace App\Controllers;

use App\Models\ReservationModel;

class ReservationController extends BaseController
{
  	var $dbModel;

    //load database in contructor
    public function __construct()
    {
        $this->dbModel = new ReservationModel();
    } 

    public function create(){
        echo view('templates/header');
        echo view('reserve-book-add');
        echo view('templates/footer');

    }
    public function store(){
        $data=[
            'title'=>$this->request->getVar('title'),
            'time'=>$this->request->getVar('time'),             
        ];
       	$this->dbModel->insert($data);
        // Redirect to signup view page after inserting new user    
        return $this->response->redirect(site_url('reserve-book-view'));
    }
    public function reserveView(){
        echo view('templates/header');		
        $data['u'] = $this->dbModel->findAll();        
        echo view('reserve-book-view', $data);
        echo view('templates/footer');            
    }
    
    public function deleteReservation($id = null){
        $this->dbModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/reserve-book-view'));
        
    }
}