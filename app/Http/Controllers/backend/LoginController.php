<?php

namespace App\Http\Controllers\backend;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\models\users;

class LoginController extends Controller
{
    // Get Login
    public function GetLogin()
    {
        return view('backend.login.login');
    }
    // Post Login
    public function PostLogin(LoginRequest $request)
    {
        
        if(users::where('email',$request->email)->where('password',$request->password)->count()>0)
        {
            session()->put('email',$request->email);
            return redirect('admin');
        }
        else{
            return redirect('login')->withInput()->with('thongbao','Tài khoản hoặc mật khẩu không chính xác');
        }
    }
    // Get Index
    public function GetIndex()
    {
        return view('backend.index');
    }
    // Get Logout
    public function logout()
    {
        session()->forget('email');
        return redirect('login');
    }
}
