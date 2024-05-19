<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2024-05-13
 * Time: 오후 3:18
 */

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user_tbl';
    protected $allowedFields = ['login_id','pw','user_nm','addr','phone_num'];


    public function login($login_id)
    {
        return $this->where('login_id', $login_id)
            ->first(); // 첫 번째 결과 반환
    }



}
