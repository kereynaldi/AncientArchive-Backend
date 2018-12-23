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
      $jumlahsurat = $datasurat_dash->count();
      $jumlahsuratfresh = $datasurat_dash->where('Status', NULL)->count();
      $jumlahsuratreview = $datasurat_dash->where('Status', 1)->count();
      $jumlahsuratapproved = $datasurat_dash->where('Status', 2)->count();
      $jumlahsuratdeclined = $datasurat_dash->where('Status', 4)->count();
      return view('dashboard', compact('datasurat_dash', 'jumlahsurat','jumlahsuratfresh', 'jumlahsuratreview', 'jumlahsuratapproved', 'jumlahsuratdeclined'));
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
        $jumlahsuratfresh = $datasurat_adminapproval->where('Status', NULL)->count();
        $jumlahsuratreview = $datasurat_adminapproval->where('Status', 1)->count();
        $jumlahsuratapproved = $datasurat_adminapproval->where('Status', 2)->count();
        $jumlahsuratdeclined = $datasurat_adminapproval->where('Status', 4)->count();
        return view('admin_document-approval', compact('datasurat_adminapproval', 'jumlahsuratfresh', 'jumlahsuratreview', 'jumlahsuratapproved', 'jumlahsuratdeclined'));
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
        $jumlahsuratfresh = $surats->where('Status', NULL)->count();
        $jumlahsuratreview = $surats->where('Status', 1)->count();
        $jumlahsuratapproved = $surats->where('Status', 2)->count();
        $jumlahsuratdeclined = $surats->where('Status', 4)->count();
        return view('document-approval', compact('surats', 'jumlahsuratfresh', 'jumlahsuratreview', 'jumlahsuratapproved', 'jumlahsuratdeclined'));
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
        $jumlahsuratarchived = $datasurat_getarchived->where('archived_status', 2)->count();
        return view('document-archived', compact('datasurat_getarchived', 'jumlahsuratarchived'));
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
