@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class="fa fa-user"></i>
    Profile
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
    <div class="col-md-3">

      <!-- Profile Image -->
      <div class="box box-primary">
        <div class="box-body box-profile">
          <img class="profile-user-img img-responsive img-circle" src="{{ asset('beranda/dist/img/Kevin.jpg') }}" alt="User profile picture">

          <h3 class="profile-username text-center">Kevin Reynaldi</h3>

          <p class="text-muted text-center"><b>Kerey@gmail.com</b></p>

          <p class="text-muted text-center">Software Engineer</p>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

      <!-- About Me Box -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">About Me</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

          <p class="text-muted">
            Computer Science in the Bogor Agriculture University from 2015
          </p>

          <hr>

          <strong><i class="fa fa-map-marker margin-r-5"></i> Address</strong>

          <p class="text-muted">Balebak, IPB Dramaga</p>

          <hr>

          <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

          <p>Apa kau tahu kemana arah angin berhembus? Jawabannya adalah hari esok</p>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->

    <div class="col-md-9">
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#settings" data-toggle="tab">Profile Settings</a></li>
        </ul>
        <div class="tab-content">

          <div class="active tab-pane" id="settings">
            <form class="form-horizontal">
              <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Name</label>

                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputName" placeholder="Name">
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>
              </div>

              <div class="form-group">
                <label for="inputJob" class="col-sm-2 control-label">Job</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputJob" placeholder="Job">
                </div>
              </div>

              <div class="form-group">
                <label for="inputEducation" class="col-sm-2 control-label">Education</label>

                <div class="col-sm-10">
                  <textarea class="form-control" id="inputEducation" placeholder="Education"></textarea>
                </div>
              </div>

              <div class="form-group">
                <label for="inputAddress" class="col-sm-2 control-label">Address</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputAddress" placeholder="Address">
                </div>
              </div>

              <div class="form-group">
                <label for="inputNotes" class="col-sm-2 control-label">Notes</label>

                <div class="col-sm-10">
                  <textarea class="form-control" id="inputNotes" placeholder="Notes"></textarea>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-info center-block">Submit</button>
                </div>
              </div>
            </form>
          </div>
          <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
      </div>
      <!-- /.nav-tabs-custom -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->


</section>
<!-- /.content -->
@endsection
