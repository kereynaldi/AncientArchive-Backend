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

        <!-- <li class="item">
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
        </li> -->

        @if($surats->count() !== 0)
          @foreach($surats as $surat)
            <?php 
            $id = $surat->idpenerima;
            $acts = DB::table('activities')->where('id_user_act','=', $id)->value('avatar'); ?>
            
            <li class="item">
              <div class="product-img">
                <img src="{{ asset('storage/' . $acts) }}" class="img-circle" alt="Product Image">
              </div>
              <div class="product-info">
                <a href="javascript:void(0)" class="product-title">{{$surat->perihal}}
                    
                    @if(($surat->status) == NULL)
                    <span class="label label-primary pull-right">Fresh</span></a>
                    <span class="product-description">
                    There is a new <b>Fresh</b> Letter
                    </span>

                    @elseif(($surat->status) == 1)
                    <span class="label label-warning pull-right">Fresh</span></a>
                    <span class="product-description">
                    Changed Document Status from <b>Fresh</b> to <b>Review</b>
                    </span>

                    @elseif(($surat->status) == 2)
                    <span class="label label-success pull-right">Fresh</span></a>
                    <span class="product-description">
                    Changed Document Status from <b>Review</b> to <b>Approved</b>
                    </span>

                    @elseif(($surat->status) == 4)
                    <span class="label label-danger pull-right">Fresh</span></a>
                    <span class="product-description">
                    Changed Document Status from <b>Fresh</b> to <b>Declined</b>
                    </span>

                    @endif

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
