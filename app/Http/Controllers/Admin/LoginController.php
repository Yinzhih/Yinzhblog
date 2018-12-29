<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    /**
     * 登录页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        return view('admin.login.index');
    }

    /**
     * 注销登录
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|void
     */
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('admin/login/index');
    }
}
