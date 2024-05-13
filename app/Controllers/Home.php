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

    public function product_detail()
    {
        return view('product-detail');
    }

    public function shoping_cart()
    {
        return view('shoping-cart');
    }

    public function about()
    {
        return view('about');
    }

    public function blog()
    {
        return view('blog');
    }

    public function blog_detail()
    {
        return view('blog-detail');
    }

    public function contact()
    {
        return view('contact');
    }

    public function login()
    {
        return view('login');
    }

    public function join()
    {
        return view('join');
    }
}
