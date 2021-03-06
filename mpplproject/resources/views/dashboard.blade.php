@extends('layouts.app')

<!-- Content Header (Page header) -->
@section('content')
<section class="content-header">
  <h1>
    <i class="fa fa-dashboard"></i>
    Dashboard
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <!-- Statistic Start -->

  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>{{$jumlahsurat}}</h3>

          <p>Total Document</p>
        </div>
        <div class="icon">
          <i class="fa fa-briefcase"></i>
        </div>
        @if(auth()->user()->hasRole('user'))
        <a href="{{ url('/document_approval') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        @elseif(auth()->user()->hasRole('admin'))
        <a href="{{ url('/admin_document_approval') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        @endif
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>{{$jumlahsuratapproved}}</sup></h3>

          <p>Document Approved</p>
        </div>
        <div class="icon">
          <i class="fa fa-thumbs-up"></i>
        </div>
        @if(auth()->user()->hasRole('user'))
        <a href="{{ url('/document_approval') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        @elseif(auth()->user()->hasRole('admin'))
        <a href="{{ url('/admin_document_approval') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        @endif
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{$jumlahsuratreview}}</h3>

          <p>Document Review</p>
        </div>
        <div class="icon">
          <i class="fa fa-book"></i>
        </div>
        @if(auth()->user()->hasRole('user'))
        <a href="{{ url('/document_approval') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        @elseif(auth()->user()->hasRole('admin'))
        <a href="{{ url('/admin_document_approval') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        @endif
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>{{$jumlahsuratdeclined}}</h3>

          <p>Document Declined</p>
        </div>
        <div class="icon">
          <i class="fa fa-thumbs-down"></i>
        </div>
        @if(auth()->user()->hasRole('user'))
        <a href="{{ url('/document_approval') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        @elseif(auth()->user()->hasRole('admin'))
        <a href="{{ url('/admin_document_approval') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        @endif
      </div>
    </div>
    <!-- ./col -->
  </div>
  <!-- /.row -->

  <!-- Statistic End -->

  <!-- Graphic Start -->

  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Monthly Archieve Recap Report</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>

        <!-- /.box-header -->
        <div class="box-body graphic">
          <div class="row">
            <div class="col-md-12">
              <p class="text-center">
                <strong>Archieve Statistic: 11 Oct, 2018 - 03 Dec, 2018</strong>
              </p>

              <div class="chart">
                <!-- Document Chart Canvas -->
                <canvas id="salesChart" style="height: 280px;"></canvas>
              </div>
              <!-- /.chart-responsive -->
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

  <!-- Graphic End -->

  <!-- TABLE: Document Start -->

  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Document Approval</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
      </div>
    </div>
    <!-- /.box-header -->

    <div class="box-body">
      <div class="table-responsive">
        <table class="table no-margin">
          <thead>
          <tr>
            <th>Document ID</th>
            <th>Document Name</th>
            <th>Upload Date</th>
            <th>Status</th>
          </tr>
          </thead>
          <tbody>
            @if($datasurat_dash->count() !== 0)
                @foreach($datasurat_dash as $surat)
                    <tr>
                      <td><a href="{{ url('/document_detail/'. $surat->id) }}">{{$surat->id}}</a></td>
                          <td>{{$surat->perihal}}</td>
                          <td>{{$surat->created_at->format('d-m-Y') }}</td>
                          @if($surat->Status == NULL) <td><span class="label label-info">Fresh</span></td>
                          @elseif($surat->Status == 1) <td><span class="label label-warning">Review</span></td>
                          @elseif($surat->Status == 2) <td><span class="label label-success">Approved</span></td>
                          @elseif($surat->archived_status == 2) <td><span class="label label-primary">Archived</span></td>
                          @elseif($surat->Status == 4) <td><span class="label label-danger">Declined</span></td>
                          @endif
                        </tr>
                    @endforeach
                @else
                    <tr><td>Tidak ada surat masuk</td></tr>
              @endif
          </tbody>
        </table>
      </div>
      <!-- /.table-responsive -->
    </div>
    <!-- /.box-body -->
    <div class="box-footer clearfix">
      @if(auth()->user()->hasRole('user'))
      <a href="{{ url('/document_approval') }}" class="btn btn-sm btn-info btn-flat center-block">View All Document</a>
      @elseif(auth()->user()->hasRole('admin'))
      <a href="{{ url('/admin_document_approval') }}" class="btn btn-sm btn-info btn-flat center-block">View All Document</a>
      @endif
    </div>
    <!-- /.box-footer -->
  </div>

  <!-- TABLE : Document End -->

  <!-- Recent Activity Start -->

  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Recent Change Activity</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
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
                  Changed Document Status from Fresh to Review
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
                  Changed Document Status from Review to Approved
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
                Changed Document Status from Review to Declined
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
                  Changed Document Status From Approved to Archieve
                </span>
          </div>
        </li>
        <!-- /.item -->
      </ul>
    </div>
    <!-- /.box-body -->
    <div class="box-footer clearfix">
      <a href="{{ url('/recent_activity') }}" class="btn btn-sm btn-info btn-flat center-block">View All Recent Activity</a>
    </div>
    <!-- /.box-footer -->
  </div>

  <!-- Recent Activity End -->

</section>
@endsection
