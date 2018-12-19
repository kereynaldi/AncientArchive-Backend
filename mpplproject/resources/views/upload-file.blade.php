@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class="fa fa-upload"></i>
    Upload Document
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Upload Document</h3>

          <div class="box-tools pull-right">
          </div>
        </div>

        <!-- /.box-header -->
        <div class="box-body graphic">
          <div class="row">
            <div class="col-md-12">

              <form action="{{ route('uploadpost') }}" method="POST" enctype="multipart/form-data" >
                {{ csrf_field() }}
                <div class="container">
                  <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                    <div class="dropzone-wrapper">
                      <div class="dropzone-desc">
                      <i class="glyphicon glyphicon-download-alt"></i>
                      <p>Choose a PDF file or drag it here.</p>
                      </div>
                      <!-- <input id="uploadPDF" type="file" name="img_logo" class="dropzone"> -->
                      <input id="uploadPDF" type="file" name="image" class="dropzone">
                    </div>

                    <div class="preview-zone hidden">
                      <div class="box box-solid">
                      <div class="with-border">
                        <h2>File Preview</h2>
                      </div>

                      <!-- PDF Preview Start -->

                      <input class="btn btn-primary center-block" name="image" type="button" value="Preview" onclick="PreviewImage();" />
                      <br>

                      <div style="clear:both">
                        <iframe target="_blank" id="viewer" frameborder="0" scrolling="no" width="100%" height="500"></iframe>
                      </div>

                      <!-- PDF Preview End -->

                      <div class="box-body"></div>
                      </div>

                      <!-- Document Description Form Start -->

                      <h3>Document Description Form</h3>
                      <br>

                      <div class="form-group">
                        <h4>Mail Description Form</h4>
                        <label class="pull-left">No. Surat</label>
                        <input type="text" name="no_surat" class="form-control" placeholder="no. surat">
                      </div>

                      <div class="form-group">
                        <label class="pull-left">Asal Surat</label>
                        <input type="text" name="asal_surat" class="form-control" placeholder="asal surat">
                      </div>

                      <div class="form-group">
                        <label class="pull-left">Tujuan Surat</label>
                        <input type="text" name="tujuan_surat" class="form-control" placeholder="tujuan surat">
                      </div>

                      <div class="form-group">
                        <label class="pull-left">Perihal Surat</label>
                        <input type="text" name="perihal" class="form-control" placeholder="perihal surat">
                      </div>

                      <div class="form-group">
                        <label class="pull-left">Jenis Surat</label>
                        <input class="form-control" name="jenis_surat" rows="5" placeholder="jenis surat">
                      </div>

                       <div class="form-group">
                        <label class="pull-left">Tanggal Masuk Surat</label>
                        <input type="text" name="tanggal_masuk" class="form-control" placeholder="tanggal masuk">
                      </div>

                       <div class="form-group">
                        <label class="pull-left">Tanggal Dibuat Surat</label>
                        <input type="text" name="tanggal_dibuat" class="form-control" placeholder="tanggal dibuat">
                      </div>

                       <div class="form-group">
                        <label class="pull-left">Deskripsi Surat</label>
                        <textarea type="text" name="deskripsi" class="form-control" placeholder="deskripsi surat"></textarea>
                      </div>

                       <div class="form-group">
                        <label class="pull-left">Nama Penerima Surat</label>
                        <input type="text" name="nama_penerima" class="form-control" placeholder="nama penerima surat">
                      </div>

                       <div class="form-group">
                        <label class="pull-left">No. Telepon Penerima Surat</label>
                        <input type="number" name="telfon_penerima" class="form-control" placeholder="no. telepon penerima surat">
                      </div>

                       <div class="form-group">
                        <label class="pull-left">Email Penerima Surat</label>
                        <input type="email" name="email_penerima" class="form-control" placeholder="email penerima surat">
                      </div>

                      <br>

                      <div class="form-group">
                        <h4>Uploader Description Form</h4>
                        <label class="pull-left">Nama Pengunggah Surat</label>
                        <input type="text" name="name" class="form-control" value="{{Auth::User()->name}}" placeholder="Insert Your Full Name Here ...">
                      </div>

                      <div class="form-group">
                        <label class="pull-left">No. Telepon Pengunggah Surat</label>
                        <input type="number" name="phone" class="form-control" value="{{Auth::User()->no_telp}}" placeholder="Insert your Phone Number Here ...">
                      </div>

                      <div class="form-group">
                        <label class="pull-left">Email Pengunggah Surat</label>
                        <input type="email" name="email" class="form-control" value="{{Auth::User()->email}}" placeholder="Insert your Email Here ...">
                      </div>

                      <br>

                      <!-- Document Description Form End -->

                    </div>

                    </div>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-primary center-block">Upload</button>
                  </div>
                  </div>
                </div>
              </form>

            </div>
          </div>
          <!-- /.row -->
        </div>
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

</section>
<!-- /.content -->
@endsection
<!-- /.sidebar -->
