<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function logout()
    {
        session_abort();
        \Auth::logoutCurrentDevice();
        return redirect('/');
    }

    public function add()
    {
        return view('products.add');
    }
}
