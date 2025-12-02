<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        return "SEI LOGGATO!";
    }

    public function profile(){
        $user = Auth::user()->name;
        return "Benvenuto ". $user ."!";
    }

}
