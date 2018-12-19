@extends('layouts.app')

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
    <div class="col-sm-3 invoice-col">
      From
      <address>
        <strong>{{$suratt->asal_surat}}</strong><br>
        <strong>Email:</strong> {{$suratt->pengunggah->email}}
      </address>
    </div>
    <!-- /.col -->
    <div class="col-sm-3 invoice-col">
      To
      <address>
        <strong>{{$suratt->tujuan_surat}}</strong><br>
        <strong>Jenis:</strong> {{$suratt->jenis_surat}}<br>
      </address>
    </div>
    <!-- /.col -->
    <div class="col-sm-3 invoice-col">
      Penerima
      <address>
        <strong>{{$suratt->nama_penerima}}</strong><br>
        <strong>Phone:</strong> {{$suratt->telfon_penerima}}<br>
        <strong>Email:</strong> {{$suratt->email_penerima}}
      </address>
    </div>
    <!-- /.col -->
    <div class="col-sm-3 invoice-col">
      <strong>ID Dokumen:</strong> {{$suratt->id}}<br>
      <strong>Tanggal Surat Dibuat:</strong> {{$suratt->tanggal_dibuat}}<br>
      <strong>Tanggal Surat Masuk:</strong> {{$suratt->tanggal_masuk}}<br>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <!-- info row -->
  <div class="row invoice-info">
    <div class="col-md-12 invoice-col">
      <b>No. Surat :</b>
      <br>
      <address>
        {{$suratt->no_surat}}
      </address>
    </div>
    <div class="col-md-12 invoice-col">
      <b>Perihal :</b>
      <br>
      <address>
        {{$suratt->perihal}}
      </address>
    </div>
    <div class="col-md-12 invoice-col">
      <b>Description :</b>
      <br>
      <address>
        {{$suratt->deskripsi}}
      </address>
    </div>
  </div>
  <!-- /.row -->
  <hr>
  <!-- Download & Download Button -->
  <div class="row no-print">
    <div class="col-xs-12">
    <a href="{{ url('document_detail/edit/' .$suratt->id) }}" class="btn btn-warning pull-left"><i class="fa fa-edit"></i> Edit</a>
      <a href="#" target="_blank" class="btn btn-success pull-right"><i class="fa fa-download"></i> Download</a>
    </div>
  </div>

</section>
<!-- /.content -->
@endsection
