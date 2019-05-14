<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
    	return view('dashboard');
    }

    public function loginAdmin(){
    	return view('auth.login');
    }

    public function loginUser(){
    	return view('User.order');
    }
}
