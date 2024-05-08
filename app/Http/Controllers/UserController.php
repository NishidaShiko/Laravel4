<?php

declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterPost;
use App\Http\Controllers\Controller;
use App\Models\User as UserModel;

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
        
        // パスワードのハッシュ化
        $datum['password'] = Hash::make($datum['password']);
        
        try{
        $r =UserModel::create($datum);
        }catch(Throwable $e){
        }
         $request->session()->flash('front.task_register_success', true);

         return redirect('/user/input');
    }
}