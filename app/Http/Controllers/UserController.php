<?php

declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Request\LoginPostRequest;
use 

    // ユーザー登録用メソッド
    public function register(UserRegisterPost $request)
    {
        // validate済みのデータの取得
        ...

        // パスワードのハッシュ化（＝暗号化）
        ...

        // UserModel経由でデータベースへデータの登録
        ...
        
        return redirect('/');
    }