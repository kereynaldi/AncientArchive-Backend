<?php if(Auth::User()->hasRole('user')) {
          "@extends('layouts.admin_app')";
      } else { "@extends('layouts.app')"; } 
?> 

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class="fa fa-file-text"></i>
    Document Detail
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-file-text"></i> Document</a></li>
    <li class="active">Document Detail</li>
  </ol>
</section>

<!-- Main content -->
<section class="invoice">

  <!-- title row -->
  <div class="row">
    <div class="col-xs-12">
      <h2 class="page-header">
        <i class="fa fa-file-text"></i> {{$suratt->perihal}}
        <small class="pull-right">Date: {{$suratt->created_at->format('d-m-Y') }}</small>
      </h2>
    </div>
    <!-- /.col -->
  </div>

  <!-- info row -->
  <div class="row invoice-info">
    <div class="col-sm-4 invoice-col">
      From
      <address>
        <strong>{{$suratt->asalsurat}}</strong><br>
        Phone: (804) 123-5432<br>
        Email: {{$suratt->pengunggah->email}}
      </address>
    </div>
    <!-- /.col -->
    <div class="col-sm-4 invoice-col">
      To
      <address>
        <strong>Rakish F</strong><br>
        Phone: (555) 539-1037<br>
        Email: rafik@gmail.com
      </address>
    </div>
    <!-- /.col -->
    <div class="col-sm-4 invoice-col">
      <b>Document ID:</b> {{$suratt->id}}<br>
      <b>Created Date:</b> 12 December 2018<br>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <!-- info row -->
  <div class="row invoice-info">
    <div class="col-md-12 invoice-col">
      <b>Description :</b>
      <br>
      <address>
        Surat ini ditujukan untuk pengajuan ruangan Common Class Room untuk kegiatan Acara Pekan Science Nasional yang akan diadakan pada 24 December 2018.
      </address>
    </div>
  </div>
  <!-- /.row -->

  <!-- Download Button -->
  <div class="row no-print">
    <div class="col-xs-12">
      <a href="#" target="_blank" class="btn btn-success pull-right"><i class="fa fa-download"></i> Download</a>
    </div>
  </div>

</section>
<!-- /.content -->
@endsection
