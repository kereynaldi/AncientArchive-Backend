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
                      <input id="image" type="file" name="image" class="dropzone">
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
                        <label class="pull-left">Subject</label>
                        <input type="text" name="subject" class="form-control" placeholder="Insert Subject ...">
                      </div>

                      <div class="form-group">
                        <label class="pull-left">From</label>
                        <input type="text" name="from" class="form-control" placeholder="Surat dari ...">
                      </div>

                      <div class="form-group">
                        <label class="pull-left">To</label>
                        <input type="text" name="to" class="form-control" placeholder="Surat untuk ...">
                      </div>

                      <div class="form-group">
                        <label class="pull-left">Jenis Surat</label>
                        <input type="text" name="jenissurat" class="form-control" placeholder="jenis surat ...">
                      </div>

                      <div class="form-group">
                        <label class="pull-left">Document Description</label>
                        <textarea class="form-control" name="deskripsisurat" rows="5" placeholder="Deskripsi Surat ..."></textarea>
                      </div>

                      <br>

                      <div class="form-group">
                        <h4>Receiver Description Form</h4>
                        <label class="pull-left">Full Name</label>
                        <input type="text" name="name" class="form-control" value="{{Auth::User()->name}}" placeholder="Insert Your Full Name Here ...">
                      </div>

                      <div class="form-group">
                        <label class="pull-left">Phone Number</label>
                        <input type="number" name="phone" class="form-control" value="{{Auth::User()->no_telp}}" placeholder="Insert your Phone Number Here ...">
                      </div>

                      <div class="form-group">
                        <label class="pull-left">Email</label>
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
