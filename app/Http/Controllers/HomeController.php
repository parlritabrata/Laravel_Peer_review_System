<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Home Page
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        $data = [];
        return view('dashboard', compact('data'));
    }
    public function my_profile($id)
    {   
        $user_data = DB::table('users')->where('id', Auth::user()->id)->first();
        return view('my_profile', compact('user_data'));
    }

    
}
