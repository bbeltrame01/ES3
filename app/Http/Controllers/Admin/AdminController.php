<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        //dd(auth()->user()->balance->saldo);
        $balance = auth()->user()->balance;
        $amount    = $balance ? $balance->saldo : 0; 
        $number = number_format($amount,2,'.',''); // Converte em 0.00
        $decimal = (int)(( $number - (int)$number ) * 100);  // Pega apenas os decimais .00 

        return view('admin.home.index', compact('amount'), compact('decimal'));
    }
    public function settings()
    {
        $name = auth()->user()->name;

        return view('admin.settings.index', compact('name'));
    }
}
