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

              <form action="" method="POST" enctype="multipart/form-data" >
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
                      <input id="uploadPDF" type="file" name="myPDF" class="dropzone">
                    </div>

                    <div class="preview-zone hidden">
                      <div class="box box-solid">
                      <div class="with-border">
                        <h2>File Preview</h2>
                      </div>

                      <!-- PDF Preview Start -->

                      <input class="btn btn-primary center-block" type="button" value="Preview" onclick="PreviewImage();" />
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
                        <input type="text" name="subject" class="form-control" placeholder="Insert Your Full Name Here ...">
                      </div>

                      <div class="form-group">
                        <label class="pull-left">From</label>
                        <input type="number" name="from" class="form-control" placeholder="Insert your Phone Number Here ...">
                      </div>

                      <div class="form-group">
                        <label class="pull-left">To</label>
                        <input type="text" name="to" class="form-control" placeholder="Insert your Email Here ...">
                      </div>

                      <div class="form-group">
                        <label class="pull-left">Document Description</label>
                        <textarea class="form-control" name="deskripsisurat" rows="5" placeholder="Insert Your Document Description Here ..."></textarea>
                      </div>

                      <br>

                      <div class="form-group">
                        <h4>Receiver Description Form</h4>
                        <label class="pull-left">Full Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Insert Your Full Name Here ...">
                      </div>

                      <div class="form-group">
                        <label class="pull-left">Phone Number</label>
                        <input type="number" name="phone" class="form-control" placeholder="Insert your Phone Number Here ...">
                      </div>

                      <div class="form-group">
                        <label class="pull-left">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Insert your Email Here ...">
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
