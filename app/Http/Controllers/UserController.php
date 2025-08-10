<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(): \Illuminate\View\View
    {
        return view('signup');
    }
}
