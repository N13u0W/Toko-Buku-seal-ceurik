<?php

require 'Controller.php';

class HomeController extends Controller
{
    public function index()
    {
        return $this-> view('views/home.php');
    }
}

$home = new HomeController(); 