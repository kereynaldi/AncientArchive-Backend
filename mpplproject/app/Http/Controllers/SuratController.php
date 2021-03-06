<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Surat;
use App\User;
use App\Activity;
use DB;

class SuratController extends Controller
{
    public function uploadSurat(Request $request)
    {
        $user = Auth::User();
        $avatar = DB::table('users')
        ->where('id','=', $user->id)->value('avatar');
        $stat = DB::table('surats')
        ->where('idpenerima','=', $user->id)->value('Status');

        

        //upload gambar
        $image  = $request->file('image')->store('gambar');

        Surat::create([
          'image'           => $image,
          'no_surat'        => $request->no_surat,
          'asal_surat'      => $request->asal_surat,
          'tujuan_surat'    => $request->tujuan_surat,
          'perihal'         => $request->perihal,
          'jenis_surat'     => $request->jenis_surat,
          'tanggal_masuk'   => $request->tanggal_masuk,
          'tanggal_dibuat'  => $request->tanggal_dibuat,
          'deskripsi'       => $request->deskripsi,
          'nama_penerima'   => $request->nama_penerima,
          'telfon_penerima' => $request->telfon_penerima,
          'email_penerima'  => $request->email_penerima,
          'Status'          => NULL,
          'archived_status' => 1,
          'idpenerima'      => $user->id,
      ]);

        $id_surat = DB::table('surats')
        ->where('idpenerima','=', $user->id)->value('id');

        Activity::create([
          'avatar'          => $avatar,
          'perihal'         => $request->perihal,
          'status'          => $stat,
          'archive_stat'    => 1,
          'id_user_act'     => $user->id,
          'id_surat_act'    => $id_surat,

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

    public function editSurat(Request $request, $id)
    {
      //Authenticate surat yang sedang diedit
      $surat = Surat::find($id);
      //Update
      $surat->update([
          'no_surat'        => $request->input('no_surat'),
          'asal_surat'      => $request->input('asal_surat'),
          'tujuan_surat'    => $request->input('tujuan_surat'),
          'perihal'         => $request->input('perihal'),
          'jenis_surat'     => $request->input('jenis_surat'),
          'tanggal_masuk'   => $request->input('tanggal_masuk'),
          'tanggal_dibuat'  => $request->input('tanggal_dibuat'),
          'deskripsi'       => $request->input('deskripsi'),
          'nama_penerima'   => $request->input('nama_penerima'),
          'telfon_penerima' => $request->input('telfon_penerima'),
          'email_penerima'  => $request->input('email_penerima'),
       ]);

      return redirect('/document_detail/' . $id);
    }

    public function reviewedStatus($id)
    {
        if ( session('key') != null ){
          $datasurat_reviewed = Surat::find($id);
          $datasurat_reviewed->Status = 1;
          $datasurat_reviewed->save();

          $user = Auth::User();
          $avatar = DB::table('users')
          ->where('id','=', $user->id)->value('avatar');
          $stat = DB::table('surats')
          ->where('idpenerima','=', $user->id)->value('Status');
          $hal = DB::table('surats')
          ->where('idpenerima','=', $user->id)->value('perihal');
          $id_surat = DB::table('surats')
          ->where('idpenerima','=', $user->id)->value('id');

          Activity::create([
          'avatar'          => $avatar,
          'perihal'         => $hal,
          'status'          => $stat,
          'archive_stat'    => 1,
          'id_user_act'     => $user->id,
          'id_surat_act'    => $id_surat,
      ]);

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
        $user = Auth::User();
        if ( session('key') != null ){
          $datasurat_cancel = Surat::find($id);

          //kondisi untuk membedakan pergantian status berdasarkan ROLE
          if($user->hasRole('user')) {
            $datasurat_cancel->Status = NULL;

          }
          elseif($user->hasRole('admin')) {
            $datasurat_cancel->Status = 1;
          }

          $datasurat_cancel->save();

          $user = Auth::User();
          $avatar = DB::table('users')
          ->where('id','=', $user->id)->value('avatar');
          $stat = DB::table('surats')
          ->where('idpenerima','=', $user->id)->value('Status');
          $hal = DB::table('surats')
          ->where('idpenerima','=', $user->id)->value('perihal');
          $id_surat = DB::table('surats')
          ->where('idpenerima','=', $user->id)->value('id');

          Activity::create([
          'avatar'          => $avatar,
          'perihal'         => $hal,
          'status'          => $stat,
          'archive_stat'    => 1,
          'id_user_act'     => $user->id,
          'id_surat_act'    => $id_surat,
      ]);

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

          $activity = DB::table('activities')->value('id_surat_act');
          $user = Auth::User();
          $avatar = DB::table('users')
          ->where('id','=', $user->id)->value('avatar');
          $stat = DB::table('surats')
          ->where('id','=', $activity)->value('Status');
          $hal = DB::table('surats')
          ->where('id','=', $activity)->value('perihal');
          $id_surat = DB::table('surats')
          ->where('id','=', $activity)->value('id');

          Activity::create([
          'avatar'          => $avatar,
          'perihal'         => $hal,
          'status'          => $stat,
          'archive_stat'    => 1,
          'id_user_act'     => $user->id,
          'id_surat_act'    => $id_surat,
      ]);

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

          $activity = DB::table('activities')->value('id_surat_act');
          $user = Auth::User();
          $avatar = DB::table('users')
          ->where('id','=', $user->id)->value('avatar');
          $stat = DB::table('surats')
          ->where('id','=', $activity)->value('Status');
          $hal = DB::table('surats')
          ->where('id','=', $activity)->value('perihal');
          $id_surat = DB::table('surats')
          ->where('id','=', $activity)->value('id');

          Activity::create([
          'avatar'          => $avatar,
          'perihal'         => $hal,
          'status'          => $stat,
          'archive_stat'    => 1,
          'id_user_act'     => $user->id,
          'id_surat_act'    => $id_surat,
      ]);

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
