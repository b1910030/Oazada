<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{    
    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }
    public function create(Request $data){
        User::create([
            'country' => $data['country'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'address' => $data['address'],
            'phone' => $data['phone'],
            'role' => $data['role'],

        ]);
        return view('auth.login');
    }

    public function signin(Request $data) : RedirectResponse {
        $credentials = [
            'email' =>$data->email,
            'password' =>$data->password,
        ];

        if (Auth::attempt($credentials)) {
           
            return redirect('/');
        }

        return back()->with('error', 'Email hoặc mật khẩu không đúng');
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
