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
          'Status' => NULL,
          'archived_status' => 1,
          'idpenerima' => $user->id,
      ]);
      //redirect home
        return redirect()->route('document_approval');
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

    public function getEdit($id)
    {
        if ( session('key') != null ){
          $suratt = Surat::find($id);
          return view('edit-document', compact('suratt'));
        } else {
            echo "<script type='text/javascript'>alert('Please login first to see this page!');
                window.location = '/login';
                </script>";
            return view('login');
        }
    }

    public function reviewedStatus($id)
    {
        if ( session('key') != null ){
          $datasurat_reviewed = Surat::find($id);
          $datasurat_reviewed->Status = 1;
          $datasurat_reviewed->save();

          return redirect()->back();
        } else {
            echo "<script type='text/javascript'>alert('Please login first to see this page!');
                window.location = '/login';
                </script>";
            return view('login');
        }
    }

    public function cancelStatus($id)
    {
        if ( session('key') != null ){
          $datasurat_cancel = Surat::find($id);
          $datasurat_cancel->Status = NULL;
          $datasurat_cancel->save();

          return redirect()->back();
        } else {
            echo "<script type='text/javascript'>alert('Please login first to see this page!');
                window.location = '/login';
                </script>";
            return view('login');
        }
    }

    public function approvedStatus($id)
    {
        if ( session('key') != null ){
          $datasurat_approve = Surat::find($id);
          $datasurat_approve->Status = 2;
          $datasurat_approve->save();

          return redirect()->back();
        } else {
            echo "<script type='text/javascript'>alert('Please login first to see this page!');
                window.location = '/login';
                </script>";
            return view('login');
        }
    }

    public function archivedStatus($id)
    {
        if ( session('key') != null ){
          $datasurat_archived = Surat::find($id);
          $datasurat_archived->archived_status = 2; //surat di archived
          $datasurat_archived->save();

          return redirect('/document_archived');
        } else {
            echo "<script type='text/javascript'>alert('Please login first to see this page!');
                window.location = '/login';
                </script>";
            return view('login');
        }
    }

    public function declinedStatus($id)
    {
        if ( session('key') != null ){
          $datasurat_declined = Surat::find($id);
          $datasurat_declined->Status = 4;
          $datasurat_declined->save();

          return redirect()->back();
        } else {
            echo "<script type='text/javascript'>alert('Please login first to see this page!');
                window.location = '/login';
                </script>";
            return view('login');
        }
    }

    public function suratRestore($id)
    {
        if ( session('key') != null ){
          $datasurat_restored = Surat::find($id);
          $datasurat_restored->archived_status = 1; //surat batal di archived
          $datasurat_restored->save();

          if (Auth::User()->hasRole('admin')) {
            return redirect('/admin_document_approval');
          }
            return redirect('/document_approval');
        } else {
            echo "<script type='text/javascript'>alert('Please login first to see this page!');
                window.location = '/login';
                </script>";
            return view('login');
        }
    }

    public function suratDelete($id)
    {
        if ( session('key') != null ){
          $datasurat_deleted = Surat::find($id);
          $datasurat_deleted->delete();

          return redirect()->back();
        } else {
            echo "<script type='text/javascript'>alert('Please login first to see this page!');
                window.location = '/login';
                </script>";
            return view('login');
        }
    }
}
