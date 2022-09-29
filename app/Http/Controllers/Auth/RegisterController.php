<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function auth()
    {
    }

    public function store(Request $request)
    {
        // dd($request->get('username'));

        // Validacion
        $this->validate($request, [
            'name' => 'required|max:20',
            'username' => 'required|min:10|max:20|unique:users',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required'
        ]);
    }
}
