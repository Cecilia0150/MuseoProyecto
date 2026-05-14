<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Aquí podrías pasar datos como el total de obras, etc.
        return view('admin.dashboard');
    }
}