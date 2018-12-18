<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\User;


class UserController extends Controller
{
  public function getProfile()
  {
      //get data User yang sedang login
      $user       = Auth::user();
      $viewProfile = $user->get();
      return view('profile', compact('viewProfile', 'user'));
  }

  public function editProfil(Request $request)
  {
    //Authenticate User yang sedang login
    $user = Auth::User();
    //Update
    $user->update([
         'name'          => $request->input('name'),
         'email'         => $request->input('email'),
         'jabatan'       => $request->input('jabatan'),
         'no_telp'       => $request->input('no_telp'),
     ]);

    return redirect()->back();
  }

  public function editAvatar(Request $request)
  {
    //Authenticate User yang sedang login
    $user = Auth::User();

    if($request->User()->avatar) {
      Storage::delete($request->User()->avatar);
    }

    //upload gambar
    $image  = $request->file('avatar')->store('avatars');

    //Update
    $user->update([
         'avatar'        => $image,
     ]);

    return redirect()->back();
  }
}
