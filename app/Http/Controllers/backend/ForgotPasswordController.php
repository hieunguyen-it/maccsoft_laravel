<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ForgotPasswordController extends Controller
{
    public function GetForgot()
    {
        Return view('backend.forgot_pwd.forgotpwd');
    }
}
