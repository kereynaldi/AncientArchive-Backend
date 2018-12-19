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
      return view('dashboard');
      } else {
          echo "<script type='text/javascript'>alert('Please login first to see this page!');
              window.location = '/login';
              </script>";
          return view('login');
      }
  }

  public function getAdmin()
  {
    if (( session('key') != null ) && (Auth::User()->hasRole('user'))){
      return view('admin_dashboard');
      } else {
          echo "<script type='text/javascript'>alert('Please login first to see this page!');
              window.location = '/login';
              </script>";
          return view('login');
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
          return view('login');
      }
  }

  public function getApproval()
  {

      if ( session('key') != null ){
        $surats = Surat::all();
        return view('document-approval', compact('surats'));
      } else {
          echo "<script type='text/javascript'>alert('Please login first to see this page!');
              window.location = '/login';
              </script>";
          return view('login');
      }
  }

  public function getArchived()
  {
      if ( session('key') != null ){
        return view('document-archived');
      } else {
          echo "<script type='text/javascript'>alert('Please login first to see this page!');
              window.location = '/login';
              </script>";
          return view('login');
      }
  }

  public function getActivity()
  {
      if ( session('key') != null ){
      return view('recent-activity');
      } else {
          echo "<script type='text/javascript'>alert('Please login first to see this page!');
              window.location = '/login';
              </script>";
          return view('login');
      }
  }

}
