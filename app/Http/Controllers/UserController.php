<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function UserDashboard(){
        return view('frontend.user_dashboard');
    }
    public function HomePage(){
        return view('welcome');
    }
}