<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {

        // Modificar el Request
        $request->request->add(['username' => Str::slug($request->username)]);
        $request->request->add(['email' => Str::lower($request->email)]);

        // Validacion
        $this->validate($request, [
            'name' => ['required', 'min:2', 'max:20',  'regex:/^[a-zA-ZÁ-ÿ]+$/'],
            'username' => 'required|min:4|max:20|unique:users',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed|min:10'
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => Str::lower($request->email),
            'password' => Hash::make($request->password)
        ]);

        // Autenticar
        auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        // forma 2 autenticar
        // auth()->attempt($request->only('email', 'passowrd'));


        // Redireccionar
        return redirect()->route('posts.index');
    }
}
