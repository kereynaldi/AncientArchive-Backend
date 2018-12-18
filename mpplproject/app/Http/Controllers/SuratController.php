<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Surat;
use App\User;

class SuratController extends Controller
{
    public function uploadSurat(Request $request)
    {
        $user = Auth::User();
        //validate Surat
        $this->validate($request, [
          'image' => 'required',
          'subject' => 'required',
          'from' => 'required',
          'to' => 'required',
          'jenissurat' => 'required',
          'deskripsisurat' => 'required',
          'name' => 'required',
          'email' => 'required',
          'phone' => 'required',
        ]);

        //upload gambar
        $image  = $request->file('image')->store('gambar');

        Surat::create([
          'image' => $image,
          'subjek' => $request->subject,
          'jenissurat' => $request->jenissurat,
          'asalsurat' => $request->from,
          'tujuansurat' => $request->to,
          'deskripsi' => $request->deskripsisurat,
          'namapenerima' => $request->name,
          'telfonpenerima' => $request->phone,
          'emailpenerima' => $request->email,
          'Status' => 1,
          'idpenerima' => $user->id
      ]);
      //redirect home
        return redirect()->route('dashboard');
    }

    public function getDetail($id)
    {
        if ( session('key') != null ){
          $suratt = Surat::find($id);
          return view('document-detail', compact('suratt'));
        } else {
            echo "<script type='text/javascript'>alert('Please login first to see this page!');
                window.location = '/login';
                </script>";
            return view('login');
        }
    }
}
