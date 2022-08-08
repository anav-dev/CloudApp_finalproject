<?php

namespace App\Models;
use CodeIgniter\Model;

class ReservationModel extends Model
{
	protected $DBGroup              = 'reservationDataBase';
	protected $table                = 'booksreserved';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
		"title", 
		"time",
	];

}