<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;
use Validator;
use Auth;

class LoginController extends Controller {

    //login index/page login
    function index() {
    //ke halaman login
    return view('login');
}

    //check login input dari user
    function checklogin(Request $request) {
    
    $this->validate($request, [
        'email'   => 'required|email',
        'password'  => 'required|alphaNum|min:3'
    ]);

    $user_data = array(
        'email'  => $request->get('email'),
        'password' => $request->get('password')
    );


    if(Auth::attempt($user_data)) {
      //sukses redirect ke route success
      session()->put('key', '1');
      if(Auth::User()->hasRole('admin')){
        return redirect('dashboard/admin');
      } else {
        return redirect('dashboard/user');
      };

    } else {
      //kembali dengan error jika login detailnya error
      return back()->with('error', 'Wrong Login Details');
    }

}

    function logout()
    {
        //ketika fungsi ini jalan, session('key') menjadi 0
        //sehingga tidak bisa membuka halaman lain tanpa login
        Auth::logout();
        session()->pull('key', null);
        return redirect('/');
    }
}
