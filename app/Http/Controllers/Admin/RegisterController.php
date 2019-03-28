<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function account()
    {
        return view('admin.register.account');
    }
    public function card()
    {
        return view('admin.register.card');
    }
}
