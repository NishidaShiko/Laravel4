<?php

declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Request\LoginPostRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // ユーザー登録ページ
        public function index()
    {
        return view('index');
    }
}