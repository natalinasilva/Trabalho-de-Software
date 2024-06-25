<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function cadastro(Request $request)
    {
        dd($request->all());
    }
}
