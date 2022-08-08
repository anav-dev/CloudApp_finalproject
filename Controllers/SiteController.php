<?php

namespace App\Controllers;
use App\Models\UserModel;

class SiteController extends BaseController
{
    var $dbModel;
    //load db in contructor
    public function __construct()
    {
        $this->dbModel = new UserModel();
    } 
    
	public function getData()
	{
		echo "<pre>";
		print_r($this->dbModel->findAll());
		echo "</pre>";
	}
}