<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return "sei nella index!";
    }

    public function profile(){
        $users = User::all();
        return view("admin.profile", compact("users"));
    }
}
