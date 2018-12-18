<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashController extends LoginController
{

    //KETIKA BELUM LOGIN ATAU SESSION KEY = 0 MAKA TIDAK BISA MENGAKSES SEMUA CONTROLLER/HALAMAN INI

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

    public function getUpload()
    {
        if ( session('key') != null ){
        return view('upload-file');
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
        return view('document-approval');
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

    public function getDetail()
    {
        if ( session('key') != null ){
        return view('document-detail');
        } else {
            echo "<script type='text/javascript'>alert('Please login first to see this page!');
                window.location = '/login';
                </script>"; 
            return view('login');
        }
    }

}