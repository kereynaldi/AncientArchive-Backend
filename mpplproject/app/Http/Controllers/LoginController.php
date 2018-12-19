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
      return redirect('dashboard');

  } else {
      //kembali dengan error jika login detailnya error
      return back()->with('error', 'Wrong Login Details');
  }

}

    function successlogin()
    {
        //ketika fungsi ini dipanggila maka session akan berjalan
        //otomasis langusng di redirect ke dashboard
        //session('key') bernilai 1
        session()->put('key', '1');
        if(Auth::User()->hasRole('user')){
            return redirect('dashboard/user');
        } else {
            return redirect('admin_dashboard');
      };
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
