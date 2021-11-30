<?php

namespace App\MVC\Controllers;
use Framework\Controller;

class HelloController extends Controller
{
    public function index()
    {
        return "<h1>HEllo Controller</h1>";
    }
}