<?php

namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
	protected $DBGroup              = 'usersDataBase';
	protected $table                = 'users';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
		"username", 
		"email",
        "password",
        "gender"
	];

}