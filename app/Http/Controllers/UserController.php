<?php

declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterPost;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    // ユーザー登録ページ
        public function register()
    {
        return view('user/register');
    }
    // 登録する
    public function input(UserRegisterPost $request)
    {
        // データの取得
        $validatedData = $request->validated();

         $name = $request->input('name');
        $email = $request->input('email');
        $pass = $request->input('password');

         return view('user.input');
    }
}