<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function getProfile()
    {
        return view('profile');
    }

    public function getDetail()
    {
        return view('document-detail');
    }


}
