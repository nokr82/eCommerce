<?php

namespace App\Controllers;

use App\Models\UserModel;
use function Psr\Log\alert;

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

    public function logout()
    {
        session()->remove('user_id');
        echo '
<script>alert("로그아웃 되었습니다.")
window.location.href = "/public/home/index";
</script>';
        exit;
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

//            $query = $db->query("SELECT * FROM shop.user_tbl;");
//            $result = $query->getResultArray()[0];

            $data = [
                'login_id' => $login_id,
                'pw' => $pw,
                'phone_num' => $phone_num,
                'user_nm' => $user_nm,
                'addr' => $addr,
            ];


            if ($db->table('user_tbl')->insert($data)) {
                $result = 1;
            } else {
                $result = 0;
            }
            return json_encode($result);
        }

    }


    public function login_logic()
    {
        // 로그인 폼 데이터 받아오기
        $login_id = $this->request->getPost('login_id');
        $pw = $this->request->getPost('pw');

        // UserModel 로드
        $userModel = new \App\Models\UserModel();

        // 사용자 정보 가져오기
        $user = $userModel->login($login_id);

        // 사용자가 존재하고 비밀번호가 일치하는지 확인
        if ($user && $pw == $user['pw']) {
            session()->set('user_id', $user['id']);
            echo '<script>window.location.href = "/public/home/index";</script>';
            exit;
        } else {
            echo '
<script>alert("아이디또는 비밀번호가 틀립니다.")
window.location.href = "/public/home/login";
</script>';
            exit;
        }
    }


}
