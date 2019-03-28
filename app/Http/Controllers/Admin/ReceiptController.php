<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReceiptController extends Controller
{
    public function buy()
    {
        return view('admin.receipt.buy');
    }
    public function income()
    {
        return view('admin.receipt.income');
    }
}
