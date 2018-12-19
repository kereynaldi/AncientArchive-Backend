<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;
use Exception;

class RegisterController extends Controller
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
      try{
        $user = User::create([
          'NIP' => $request->NIP,
          'name' => $request->name,
          'email' => $request->email,
          'password' => bcrypt($request->password)
        ]);
        $user->assignRole('user');
        //redirect home
        return redirect('/login');
      }
      catch (Exception $e){
        $error_code = $e->errorInfo[1];
        if($error_code == 1062){
            return "Seems like this account has been registered before !";
        }
      }
    }
}
