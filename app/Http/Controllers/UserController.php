<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $nama = 'Febrian';
        return view('user', ['nama' => $nama]);
    }

    public function about()
    {
        
    }
}
