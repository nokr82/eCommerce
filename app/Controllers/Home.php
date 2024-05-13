<?php

namespace App\Controllers;

use App\Models\UserModel;

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


    //주소값 리턴 동우
    public function ajax_join()
    {
        $request = \Config\Services::Request();
//        'login_id': login_id,
//                'pw': pw,
//                'phone_num': phone_num,
//                'user_nm': user_nm
        if ($request->isAJAX()) {
            $db = \Config\Database::connect('default');
            $login_id = $request->getPost('login_id');
            $pw = $request->getPost('pw');
            $phone_num = $request->getPost('phone_num');
            $user_nm = $request->getPost('user_nm');
            $addr = $request->getPost('addr');

            $query = $db->query("SELECT * FROM shop.user_tbl;");
            $result = $query->result_array()[0];

            return json_encode($result);
        }

    }

}
