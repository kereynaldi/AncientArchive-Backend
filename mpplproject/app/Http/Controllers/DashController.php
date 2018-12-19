<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Surat;

class DashController extends Controller
{
  public function index()
  {
      if ( session('key') != null ){
      $datasurat_dash = Surat::all();
      return view('dashboard', compact('datasurat_dash'));
      } else {
          echo "<script type='text/javascript'>alert('Please login first to see this page!');
              window.location = '/login';
              </script>";
      }
  }

  public function getAdminApproval()
  {
    if ( (session('key') != null) && (Auth::User()->hasRole('admin')) ){
        $datasurat_adminapproval = Surat::all();
        return view('admin_document-approval', compact('datasurat_adminapproval'));
      } else {
          echo "<script type='text/javascript'>alert('Please login first to see this page!');
              window.location = '/login';
              </script>";
      }
  }

  public function getUpload()
  {
      if ( session('key') != null ){
        $user       = Auth::user();
        $viewProfile = $user->get();
        return view('upload-file', compact('viewProfile', 'user'));
      } else {
          echo "<script type='text/javascript'>alert('Please login first to see this page!');
              window.location = '/login';
              </script>";
      }
  }

  public function getReceived()
  {
    $surats = Surat::all();
    return view('document-received', compact('surats'));
  }

  public function getApproval()
  {
      if ( session('key') != null ){
        //untuk nyambungin ke database surat
        $surats = Surat::all();
        return view('document-approval', compact('surats'));
      } else {
          echo "<script type='text/javascript'>alert('Please login first to see this page!');
              window.location = '/login';
              </script>";
      }
  }

  public function getArchived()
  {
      if ( session('key') != null ){
        $datasurat_getarchived = Surat::all();
        return view('document-archived', compact('datasurat_getarchived'));
      } else {
          echo "<script type='text/javascript'>alert('Please login first to see this page!');
              window.location = '/login';
              </script>";
      }
  }

  public function getActivity()
  {
      if ( session('key') != null ){
      $surats = Surat::all();
      return view('recent-activity', compact('surats'));
      } else {
          echo "<script type='text/javascript'>alert('Please login first to see this page!');
              window.location = '/login';
              </script>";
      }
  }

}
