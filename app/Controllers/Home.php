<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }
    public function index2()
    {
        return view('home-02');
    }
    public function index3()
    {
        return view('home-03');
    }
    public function product()
    {
        return view('product');
    }
}
