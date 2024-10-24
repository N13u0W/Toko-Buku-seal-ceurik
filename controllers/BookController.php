<?php

require 'Controller.php';

class BookController extends Controller
{
    public static function index()
    {
        return self::view('views/book.php');
    }
}

HomeController::index();