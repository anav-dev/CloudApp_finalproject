<?php

namespace App\Models;
use CodeIgniter\Model;

class BookModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'newbooks';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
        'name','author','year','topic','status'
	];

}