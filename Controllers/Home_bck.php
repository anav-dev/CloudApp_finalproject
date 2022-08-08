<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function multiply($num1, $num2)
    {
        $num1 = 4;
        $num2 = 5;
        $result = $num1 * $num2;
        return (int) $result;
    }
}
