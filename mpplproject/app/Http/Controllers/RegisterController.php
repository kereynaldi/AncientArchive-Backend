<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }

    public function getRegister()
    {
        return view('register');
    }

    public function PostRegister(Request $request)
    {
      //authenticating users
      // $this->validate($request, [
      //   'NIP' => 'required|min:5',
      //   'name' => 'required|min:4',
      //   'email' => 'required|email|unique:users',
      //   'password' => 'required|min:6',
      // ]);

      User::create([
        'NIP' => $request->NIP,
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password)
      ]);
      //redirect home
        return redirect() -> back();
    }