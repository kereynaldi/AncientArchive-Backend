<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DashController extends Controller
{

    public function index()
    {
        return view('dashboard');
    }

    public function getUpload()
    {
        return view('upload-file');
    }

    public function getApproval()
    {
        return view('document-approval');
    }

    public function getArhived()
    {
        return view('document-archived');
    }

    public function getActivity()
    {
        return view('recent-activity');
    }



    public function getDetail()
    {
        return view('document-detail');
    }


}
