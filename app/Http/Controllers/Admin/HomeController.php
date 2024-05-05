<?php
declare(strict_types=1);
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * トップページを表示する
     *
     * @retrun \Illuminate\View\View
     */
     public function top()
     {
         return view('admin.top');
     }
}