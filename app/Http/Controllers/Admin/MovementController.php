<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MovementController extends Controller
{
    public function spent()
    {
        return view('admin.movement.spent');
    }
    public function income()
    {
        return view('admin.movement.income');
    }
    public function transfer()
    {
        return view('admin.movement.transfer');
    } 
    public function new_movement()
    {
        return view('admin.movement.new.new_movement');
    }
}
