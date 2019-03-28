<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function account()
    {
        return view('admin.report.extract.account');
    }
    public function card()
    {
        return view('admin.report.extract.card');
    }
    public function balance()
    {
        return view('admin.report.movements.balance');
    }
    public function releases()
    {
        return view('admin.report.movements.releases');
    }
}
