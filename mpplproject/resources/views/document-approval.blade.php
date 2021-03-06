@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class="fa fa-file-text"></i>
    Document Approval Status
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-file-text"></i> Document Approval Status</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <!-- Navigation Tab Start -->

  <div class="col-md-12">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#fresh" data-toggle="tab">Fresh</a></li>
        <li><a href="#review" data-toggle="tab">Review</a></li>
        <li><a href="#approved" data-toggle="tab">Approved</a></li>
        <li><a href="#declined" data-toggle="tab">Declined</a></li>
      </ul>
      <div class="tab-content">

        <!-- Fresh Tab Start -->

        <div class="active tab-pane" id="fresh">

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Fresh Document</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <div class="table-responsive">
                <table id="example1" class="table no-margin">
                  <thead>
                  <tr>
                    <th>Document ID</th>
                    <th>Document Name</th>
                    <th>Upload Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <!-- kondisi jika surast tidak ada di database -->
                  @if($jumlahsuratfresh !== 0)
                    <!-- foreach untuk memanggil seluruh surat yang ada di database dan looping -->
                    @foreach($surats as $surat)
                      <!-- kondisi if untuk menentukan surat yang statusnya fresh dan not archived -->
                      @if($surat->Status == NULL && $surat->archived_status == 1)
                        <tr>
                          <td><a href="{{ url('/document_detail/'. $surat->id) }}">{{$surat->id}}</a></td>
                          <td>{{$surat->perihal}}</td>
                          <td>{{$surat->created_at->format('d-m-Y') }}</td>
                          <td><span class="label label-info">Fresh</span></td>
                          <td>
                              <a href="{{ url('/status/reviewed/' . $surat->id) }}">
                              <button type="button" class="btn btn-sm btn-warning btn-flat">Review</button>
                              </a>
                          </td>
                        </tr>
                      @endif
                    @endforeach
                  @else
                    <tr><td>Tidak ada surat masuk</td></tr>
                  @endif
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>

          </div>

          <!-- TABLE : Document End -->

        </div>
        <!-- /.tab-pane -->

        <!-- Fresh Tab End -->

        <!-- Review Tab Start -->

        <div class="tab-pane" id="review">

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Review Progress</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <div class="table-responsive">
                <table id="example2" class="table no-margin">
                  <thead>
                  <tr>
                    <th>Document ID</th>
                    <th>Document Name</th>
                    <th>Review Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @if($jumlahsuratreview !== 0)
                    @foreach($surats as $surat)
                    <!-- kondisi if untuk menentukan surat yang statusnya review dan not archived -->
                      @if($surat->Status == 1 && $surat->archived_status == 1)
                        <tr>
                          <td><a href="{{ url('/document_detail/'. $surat->id) }}">{{$surat->id}}</a></td>
                          <td>{{$surat->perihal}}</td>
                          <td>{{$surat->created_at->format('d-m-Y') }}</td>
                          <td><span class="label label-warning">Review</span></td>
                          <td>
                            <a href="{{ url('/status/cancel/' . $surat->id) }}">
                            <button type="button" class="btn btn-sm btn-danger btn-flat">Cancel</button>
                            </a>
                          </td>
                        </tr>
                      @endif
                    @endforeach
                  @else
                    <tr><td>Tidak ada surat masuk</td></tr>
                  @endif
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>

          </div>

          <!-- TABLE : Document End -->

        </div>
        <!-- /.tab-pane -->

        <!-- Review Tab End -->

        <!-- Approved Tab Start -->

        <div class="tab-pane" id="approved">

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Approved Document</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <div class="table-responsive">
                <table id="example3" class="table no-margin">
                  <thead>
                    <tr>
                      <th>Document ID</th>
                      <th>Document Name</th>
                      <th>Review Date</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($jumlahsuratapproved !== 0)
                      @foreach($surats as $surat)
                      <!-- kondisi if untuk menentukan surat yang statusnya approved dan not archived -->
                        @if($surat->Status == 2 && $surat->archived_status == 1)
                          <tr>
                            <td><a href="{{ url('/document_detail/'. $surat->id) }}">{{$surat->id}}</a></td>
                            <td>{{$surat->perihal}}</td>
                            <td>{{$surat->created_at->format('d-m-Y') }}</td>
                            <td><span class="label label-success">Approved</span></td>
                            <td>
                              <a href="{{ url('/status/archived/' . $surat->id) }}">
                                <button type="button" class="btn btn-sm btn-primary btn-flat">Archive</button>
                              </a>
                            </td>
                          </tr>
                        @endif
                      @endforeach
                    @else
                      <tr><td>Tidak ada surat masuk</td></tr>
                    @endif
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>

          </div>

          <!-- TABLE : Document End -->

        </div>
        <!-- /.tab-pane -->

        <!-- Approved Tab End -->

        <!-- Declined Tab Start -->

        <div class="tab-pane" id="declined">

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Declined Document</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <div class="table-responsive">
                <table id="example4"  class="table no-margin">
                  <thead>
                  <tr>
                    <th>Document ID</th>
                    <th>Document Name</th>
                    <th>Declined Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @if($jumlahsuratdeclined !== 0)
                      @foreach($surats as $surat)
                      <!-- kondisi if untuk menentukan surat yang statusnya declined dan not archived -->
                        @if($surat->Status == 4 && $surat->archived_status == 1)
                          <tr>
                            <td><a href="{{ url('/document_detail/'. $surat->id) }}">{{$surat->id}}</a></td>
                            <td>{{$surat->perihal}}</td>
                            <td>{{$surat->created_at->format('d-m-Y') }}</td>
                            <td><span class="label label-danger">Declined</span></td>
                            <td>
                              <a href="{{ url('/status/archived/' . $surat->id) }}">
                                <button type="button" class="btn btn-sm btn-primary btn-flat">Archive</button>
                              </a>
                            </td>
                          </tr>
                        @endif
                      @endforeach
                    @else
                      <tr><td>Tidak ada surat masuk</td></tr>
                    @endif
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>

          </div>

          <!-- TABLE : Document End -->

        </div>

        <!-- Declined Tab End -->

      </div>
      <!-- /.tab-content -->
    </div>
    <!-- /.nav-tabs-custom -->
  </div>

  <!-- Modal Start -->

  <div class="modal modal-primary fade" id="modal-primary">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Change Status to <b>Archieve</b></h4>
        </div>
        <div class="modal-body">
          <p>Do You Want to <b>Archieve</b> this Document ?</p>
        </div>
        <div class="modal-footer">
          <a href="../document-approval/document-approval.html"><button type="button" class="btn btn-outline">Yes</button></a>
          <button type="button" class="btn btn-outline" data-dismiss="modal">No</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <!-- Navigation Tab End -->

</section>
<!-- /.content -->
@endsection
