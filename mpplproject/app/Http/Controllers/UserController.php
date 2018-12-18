<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\User;


class UserController extends Controller
{
  public function getProfile()
  {
      $user       = Auth::user();
      $viewProfile = $user->get();
      return view('profile', compact('viewProfile', 'user'));
  }

  public function editProfil(Request $request)
  {
    $user = Auth::User();

    $user->update([
         'name'          => $request->input('name'),
         'email'         => $request->input('email'),
         'jabatan'       => $request->input('jabatan'),
         'no_telp'       => $request->input('no_telp'),
     ]);

    return redirect()->back();
  }
}
