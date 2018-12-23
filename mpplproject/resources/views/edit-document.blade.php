@extends('layouts.app')

@section('content')

<form action="{{ route('editsurat', $suratt->id) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="container">
      <div class="row">
      <div class="col-md-12">
        <div class="form-group">
        <div class="preview-zone">

          <!-- Document Description Form Start -->

          <h3>Document Description Form</h3>
          <br>

          <div class="form-group">
            <h4>Mail Description Form</h4>
            <label class="pull-left">No. Surat</label>
            <input type="text" name="no_surat" class="form-control" placeholder="no. surat" value="{{$suratt->no_surat}}">
          </div>

          <div class="form-group">
            <label class="pull-left">Asal Surat</label>
            <input type="text" name="asal_surat" class="form-control" placeholder="asal surat" value="{{$suratt->asal_surat}}">
          </div>

          <div class="form-group">
            <label class="pull-left">Tujuan Surat</label>
            <input type="text" name="tujuan_surat" class="form-control" placeholder="tujuan surat" value="{{$suratt->tujuan_surat}}">
          </div>

          <div class="form-group">
            <label class="pull-left">Perihal Surat</label>
            <input type="text" name="perihal" class="form-control" placeholder="perihal surat" value="{{$suratt->perihal}}">
          </div>

          <div class="form-group">
            <label class="pull-left">Jenis Surat</label>
            <input class="form-control" name="jenis_surat" rows="5" placeholder="jenis surat" value="{{$suratt->jenis_surat}}">
          </div>

           <div class="form-group">
            <label class="pull-left">Tanggal Masuk Surat</label>
            <input type="text" name="tanggal_masuk" class="form-control" placeholder="tanggal masuk" value="{{$suratt->tanggal_masuk}}">
          </div>

           <div class="form-group">
            <label class="pull-left">Tanggal Dibuat Surat</label>
            <input type="text" name="tanggal_dibuat" class="form-control" placeholder="tanggal dibuat" value="{{$suratt->tanggal_dibuat}}">
          </div>

           <div class="form-group">
            <label class="pull-left">Deskripsi Surat</label>
            <textarea type="text" name="deskripsi" class="form-control" placeholder="deskripsi surat">{{$suratt->deskripsi}}</textarea>
          </div>

           <div class="form-group">
            <label class="pull-left">Nama Penerima Surat</label>
            <input type="text" name="nama_penerima" class="form-control" placeholder="nama penerima surat" value="{{$suratt->nama_penerima}}">
          </div>

           <div class="form-group">
            <label class="pull-left">No. Telepon Penerima Surat</label>
            <input type="number" name="telfon_penerima" class="form-control" placeholder="no. telepon penerima surat" value="{{$suratt->telfon_penerima}}">
          </div>

           <div class="form-group">
            <label class="pull-left">Email Penerima Surat</label>
            <input type="email" name="email_penerima" class="form-control" placeholder="email penerima surat" value="{{$suratt->email_penerima}}">
          </div>

          <!-- Document Description Form End -->

        </div>

        </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-12">
        <button type="submit" class="btn btn-primary center-block">Update</button>
      </div>
      </div>
    </div>
  </form>
@endsection
