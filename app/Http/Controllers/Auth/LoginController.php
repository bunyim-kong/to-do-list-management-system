<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Ap

class LoginController extends Controller
{
    //
    public function index()
    {
        $login = login::all();
        return view('form', compact('form'));

    }
    public function create()
    {
        return view('form');
    }
    public function store(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $gender = $request->input('gender');
    }
}
