@extends('layouts.app')

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

        @if($surats->count() !== 0)
          @foreach($surats as $surat)
            <li class="item">
              <div class="product-img">
                <img src="{{ asset('beranda/dist/img/kevin.jpg') }}" class="img-circle" alt="Product Image">
              </div>
              <div class="product-info">
                <a href="javascript:void(0)" class="product-title">{{$surat->perihal}}
                    <span class="label label-warning pull-right">{{$surat->status}}</span></a>
                    <span class="product-description">
                      Changed Document Status from <b>Fresh</b> to <b>{{$surat->status}}</b>
                    </span>
              </div>
            </li>
          @endforeach
        @else
            <tr><td>Tidak ada surat masuk</td></tr>
        @endif

        <!-- /.item -->
      </ul>
    </div>
  </div>

  <!-- Recent Activity End -->

</section>
<!-- /.content -->
@endsection
