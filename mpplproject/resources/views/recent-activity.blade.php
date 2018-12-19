<?php if(Auth::User()->hasRole('user')) {
          "@extends('layouts.admin_app')";
      } else { "@extends('layouts.app')"; } 
?> 

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class="fa fa-exchange"></i>
    Recent Activity
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <!-- Recent Activity Start -->

  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Recent Change Activity</h3>

      <div class="box-tools pull-right">
      </div>
    </div>
    <!-- /.box-header -->

    <div class="box-body">
      <ul class="products-list product-list-in-box">
        <li class="item">
          <div class="product-img">
            <img src="{{ asset('beranda/dist/img/kevin.jpg') }}" class="img-circle" alt="Product Image">
          </div>
          <div class="product-info">
            <a href="javascript:void(0)" class="product-title">Permohonan Pengajuan Ruang Seminar
                <span class="label label-warning pull-right">Review</span></a>
                <span class="product-description">
                  Changed Document Status from <b>Fresh</b> to <b>Review</b>
                </span>
          </div>
        </li>
        <!-- /.item -->
        <li class="item">
          <div class="product-img">
            <img src="{{ asset('beranda/dist/img/Rakish.jpg') }}" class="img-circle" alt="Product Image">
          </div>
          <div class="product-info">
            <a href="javascript:void(0)" class="product-title">Permohonan Pengajuan Dana PMW
                <span class="label label-success pull-right">Approved</span></a>
                <span class="product-description">
                  Changed Document Status from <b>Review</b> to <b>Approved</b>
                </span>
          </div>
        </li>
        <!-- /.item -->
        <li class="item">
          <div class="product-img">
            <img src="{{ asset('beranda/dist/img/Rakish.jpg') }}" class="img-circle" alt="Product Image">
          </div>
          <div class="product-info">
            <a href="javascript:void(0)" class="product-title">Pengajuan Permintaan Kenaikan Pangkat
              <span class="label label-danger pull-right">Declined</span></a>
              <span class="product-description">
                Changed Document Status from <b>Review</b> to <b>Declined</b>
              </span>
          </div>
        </li>
        <!-- /.item -->
        <li class="item">
          <div class="product-img">
            <img src="{{ asset('beranda/dist/img/kevin.jpg') }}" class="img-circle" alt="Product Image">
          </div>
          <div class="product-info">
            <a href="javascript:void(0)" class="product-title">Permohonan Pengajuan Cuti 3 Hari
              <span class="label label-primary pull-right">Archieve</span></a>
              <span class="product-description">
                  Changed Document Status From <b>Approved</b> to <b>Archieve</b>
                </span>
          </div>
        </li>
        <!-- /.item -->
      </ul>
    </div>
  </div>

  <!-- Recent Activity End -->

</section>
<!-- /.content -->
@endsection
