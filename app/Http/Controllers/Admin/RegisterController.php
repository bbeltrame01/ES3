<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Register;

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
    public function new_account()
    {
        return view('admin.register.new.new_account');
    }
    public function new_card()
    {
        return view('admin.register.new.new_card');
    }
    public function new_accountRegister(Request $request, Register $register)
    {
        $register->register($request->account_name);
    }
}
