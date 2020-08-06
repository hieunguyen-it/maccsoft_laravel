<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class RegistrationController extends Controller
{
    public function GetRegister()
    {
        return view('backend.registration.registration');
    }

    public function PostRegister()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ],
        [
            'name.required'=>'Tên không được để trống !',
            'email.required'=>'Email không được để trống !',
            'email.email'=>'Tài khoản phải là Email !',
            'password.required'=>'Mật khẩu không được để trống !',
            'password.min'=>'Mật khẩu phải lớn hơn hoặc bằng 8 ký tự !',
        ]);
        
            $user = User::create(request(['name', 'email', 'password']));
        
        auth()->login($user);
        
        return redirect()->to('login');
    }
}
