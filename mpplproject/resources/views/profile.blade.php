<?php if(Auth::User()->hasRole('user')) {
          "@extends('layouts.admin_app')";
      } else { "@extends('layouts.app')"; } 
?> 

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
          <img class="profile-user-img img-responsive img-circle" src="{{ asset('storage/' . auth()->user()->avatar) }}" alt="User profile picture">

          <h3 class="profile-username text-center">{{Auth::User()->name}}</h3>

          <p class="text-muted text-center"><b>{{Auth::User()->email}}</b></p>

          <p class="text-muted text-center">{{Auth::User()->jabatan}}</p>
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

          <p class="text-muted">{{Auth::User()->education}}
          </p>

          <hr>

          <strong><i class="fa fa-map-marker margin-r-5"></i> Ruangan</strong>

          <p class="text-muted">{{Auth::User()->ruangan}}</p>

          <hr>

          <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

          <p>{{Auth::User()->notes}}</p>
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
            <form class="form-horizontal" action="{{ route('editprofile') }}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              {{method_field('PATCH')}}
              <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Name</label>

                <div class="col-sm-10">
                  <input type="text" name="name" class="form-control" id="inputName" placeholder="Nama" value="{{Auth::User()->name}}">
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                <div class="col-sm-10">
                  <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" value="{{Auth::User()->email}}">
                </div>
              </div>

              <div class="form-group">
                <label for="inputJob" class="col-sm-2 control-label">Jabatan</label>

                <div class="col-sm-10">
                  <input type="text" name="jabatan" class="form-control" id="inputJob" placeholder="Jabatan" value="{{Auth::User()->jabatan}}">
                </div>
              </div>

              <div class="form-group">
                <label for="inputEducation" class="col-sm-2 control-label">Education</label>

                <div class="col-sm-10">
                  <input type="text" name="education" class="form-control" id="inputEducation" placeholder="Education" value="{{Auth::User()->education}}">
                </div>
              </div>

              <div class="form-group">
                <label for="inputRuangan" class="col-sm-2 control-label">Ruangan</label>

                <div class="col-sm-10">
                  <input type="text" name="ruangan" class="form-control" id="inputRuangan" placeholder="Ruangan" value="{{Auth::User()->ruangan}}">
                </div>
              </div>

              <div class="form-group">
                <label for="inputNomor" class="col-sm-2 control-label">Nomor Handphone</label>

                <div class="col-sm-10">
                  <input type="number" name="no_telp" class="form-control" id="inputNomor" placeholder="Nomor Handphone" value="{{Auth::User()->no_telp}}">
                </div>
              </div>

              <div class="form-group">
                <label for="inputNotes" class="col-sm-2 control-label">Notes</label>

                <div class="col-sm-10">
                  <textarea type="text" name="notes" class="form-control" id="inputNotes" placeholder="Notes" value="{{Auth::User()->notes}}"></textarea>
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
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#settings" data-toggle="tab">Avatar</a></li>
        </ul>
        <div class="tab-content">

          <div class="active tab-pane" id="settings">
            <form class="form-horizontal" action="{{ route('editavatar') }}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              {{method_field('PATCH')}}

              <div class="form-group">
                <label for="inputPhoto" class="col-sm-2 control-label">Photo</label>

                <div class="col-sm-10">
                  <input type="file" value="" name="avatar" class="form-control" id="avatar">
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
