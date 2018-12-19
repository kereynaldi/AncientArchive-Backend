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
        // //validate Surat
        // $this->validate($request, [
        //   'image' => 'required',
        //   'subject' => 'required',
        //   'from' => 'required',
        //   'to' => 'required',
        //   'jenissurat' => 'required',
        //   'deskripsisurat' => 'required',
        //   'name' => 'required',
        //   'email' => 'required',
        //   'phone' => 'required',
        // ]);

        //upload gambar
        $image  = $request->file('image')->store('gambar');

        Surat::create([
          'image' => $image,
          'no_surat' => $request->no_surat,
          'asal_surat' => $request->asal_surat,
          'tujuan_surat' => $request->tujuan_surat,
          'perihal' => $request->perihal,
          'jenis_surat' => $request->jenis_surat,
          'tanggal_masuk' => $request->tanggal_masuk,
          'tanggal_dibuat' => $request->tanggal_dibuat,
          'deskripsi' => $request->deskripsi,
          'nama_penerima' => $request->nama_penerima,
          'telfon_penerima' => $request->telfon_penerima,
          'email_penerima' => $request->email_penerima,
          'Status' => 1,
          'idpenerima' => $user->id,
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
