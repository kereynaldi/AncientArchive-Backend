@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class="fa fa-folder"></i>
    Archieved Document
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <!-- Navigation Tab Start -->

  <div class="col-md-12">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#fresh" data-toggle="tab">Fresh</a></li>
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
                    <th>Archieved Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a href="{{ url('/document_detail') }}">DA0005</a></td>
                      <td>Permohonan Pengajuan Ruang Seminar</td>
                      <td>12 December 2018</td>
                      <td><span class="label label-info">Fresh</span></td>
                      <td>
                        <button type="button" class="btn btn-sm btn-success btn-flat" data-toggle="modal" data-target="#modal-success">Restore</button>
                        <button type="button" class="btn btn-sm btn-danger btn-flat" data-toggle="modal" data-target="#modal-danger">Delete</button>
                      </td>
                    <tr>
                      <td><a href="{{ url('/document_detail') }}">DA0004</a></td>
                      <td>Permohonan Pengajuan Dana PMW</td>
                      <td>12 December 2018</td>
                      <td><span class="label label-info">Fresh</span></td>
                      <td>
                        <button type="button" class="btn btn-sm btn-success btn-flat" data-toggle="modal" data-target="#modal-success">Restore</button>
                        <button type="button" class="btn btn-sm btn-danger btn-flat" data-toggle="modal" data-target="#modal-danger">Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="{{ url('/document_detail') }}">DA0003</a></td>
                      <td>Pengajuan Permintaan Kenaikan Pangkat</td>
                      <td>02 December 2018</td>
                      <td><span class="label label-info">Fresh</span></td>
                      <td>
                        <button type="button" class="btn btn-sm btn-success btn-flat" data-toggle="modal" data-target="#modal-success">Restore</button>
                        <button type="button" class="btn btn-sm btn-danger btn-flat" data-toggle="modal" data-target="#modal-danger">Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="{{ url('/document_detail') }}">DA0002</a></td>
                      <td>Permohonan Pengajuan Kegiatan Workshop Bilibili</td>
                      <td>23 November 2018</td>
                      <td><span class="label label-info">Fresh</span></td>
                      <td>
                        <button type="button" class="btn btn-sm btn-success btn-flat" data-toggle="modal" data-target="#modal-success">Restore</button>
                        <button type="button" class="btn btn-sm btn-danger btn-flat" data-toggle="modal" data-target="#modal-danger">Delete</button>
                      </td>
                    <tr>
                      <td><a href="{{ url('/document_detail') }}">DA0001</a></td>
                      <td>Permohonan Pengajuan Cuti 3 Hari</td>
                      <td>29 October 2018</td>
                      <td><span class="label label-info">Fresh</span></td>
                      <td>
                        <button type="button" class="btn btn-sm btn-success btn-flat" data-toggle="modal" data-target="#modal-success">Restore</button>
                        <button type="button" class="btn btn-sm btn-danger btn-flat" data-toggle="modal" data-target="#modal-danger">Delete</button>
                      </td>
                    </tr>
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

        <!-- Approved Tab Start -->

        <div class="tab-pane" id="approved">

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Approved Document</h3>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
              <div class="table-responsive">
                <table id="example2" class="table no-margin">
                  <thead>
                  <tr>
                    <th>Document ID</th>
                    <th>Document Name</th>
                    <th>Archieved Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                    <tr>
                      <td><a href="../document-detail/document-detail.html">DA0005</a></td>
                      <td>Permohonan Pengajuan Ruang Seminar</td>
                      <td>12 December 2018</td>
                      <td><span class="label label-success">Approved</span></td>
                      <td>
                        <button type="button" class="btn btn-sm btn-success btn-flat" data-toggle="modal" data-target="#modal-success">Restore</button>
                        <button type="button" class="btn btn-sm btn-danger btn-flat" data-toggle="modal" data-target="#modal-danger">Delete</button>
                      </td>
                    <tr>
                      <td><a href="../document-detail/document-detail.html">DA0004</a></td>
                      <td>Permohonan Pengajuan Dana PMW</td>
                      <td>12 December 2018</td>
                      <td><span class="label label-success">Approved</span></td>
                      <td>
                        <button type="button" class="btn btn-sm btn-success btn-flat" data-toggle="modal" data-target="#modal-success">Restore</button>
                        <button type="button" class="btn btn-sm btn-danger btn-flat" data-toggle="modal" data-target="#modal-danger">Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="../document-detail/document-detail.html">DA0003</a></td>
                      <td>Pengajuan Permintaan Kenaikan Pangkat</td>
                      <td>02 December 2018</td>
                      <td><span class="label label-success">Approved</span></td>
                      <td>
                        <button type="button" class="btn btn-sm btn-success btn-flat" data-toggle="modal" data-target="#modal-success">Restore</button>
                        <button type="button" class="btn btn-sm btn-danger btn-flat" data-toggle="modal" data-target="#modal-danger">Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="../document-detail/document-detail.html">DA0002</a></td>
                      <td>Permohonan Pengajuan Kegiatan Workshop Bilibili</td>
                      <td>23 November 2018</td>
                      <td><span class="label label-success">Approved</span></td>
                      <td>
                        <button type="button" class="btn btn-sm btn-success btn-flat" data-toggle="modal" data-target="#modal-success">Restore</button>
                        <button type="button" class="btn btn-sm btn-danger btn-flat" data-toggle="modal" data-target="#modal-danger">Delete</button>
                      </td>
                    <tr>
                      <td><a href="../document-detail/document-detail.html">DA0001</a></td>
                      <td>Permohonan Pengajuan Cuti 3 Hari</td>
                      <td>29 October 2018</td>
                      <td><span class="label label-success">Approved</span></td>
                      <td>
                        <button type="button" class="btn btn-sm btn-success btn-flat" data-toggle="modal" data-target="#modal-success">Restore</button>
                        <button type="button" class="btn btn-sm btn-danger btn-flat" data-toggle="modal" data-target="#modal-danger">Delete</button>
                      </td>
                    </tr>
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
                <table id="example3"  class="table no-margin">
                  <thead>
                  <tr>
                    <th>Document ID</th>
                    <th>Document Name</th>
                    <th>Archieved Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a href="../document-detail/document-detail.html">DA0005</a></td>
                      <td>Permohonan Pengajuan Ruang Seminar</td>
                      <td>12 December 2018</td>
                      <td><span class="label label-danger">Declined</span></td>
                      <td>
                        <button type="button" class="btn btn-sm btn-success btn-flat" data-toggle="modal" data-target="#modal-success">Restore</button>
                        <button type="button" class="btn btn-sm btn-danger btn-flat" data-toggle="modal" data-target="#modal-danger">Delete</button>
                      </td>
                    <tr>
                      <td><a href="../document-detail/document-detail.html">DA0004</a></td>
                      <td>Permohonan Pengajuan Dana PMW</td>
                      <td>12 December 2018</td>
                      <td><span class="label label-danger">Declined</span></td>
                      <td>
                        <button type="button" class="btn btn-sm btn-success btn-flat" data-toggle="modal" data-target="#modal-success">Restore</button>
                        <button type="button" class="btn btn-sm btn-danger btn-flat" data-toggle="modal" data-target="#modal-danger">Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="../document-detail/document-detail.html">DA0003</a></td>
                      <td>Pengajuan Permintaan Kenaikan Pangkat</td>
                      <td>02 December 2018</td>
                      <td><span class="label label-danger">Declined</span></td>
                      <td>
                        <button type="button" class="btn btn-sm btn-success btn-flat" data-toggle="modal" data-target="#modal-success">Restore</button>
                        <button type="button" class="btn btn-sm btn-danger btn-flat" data-toggle="modal" data-target="#modal-danger">Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="../document-detail/document-detail.html">DA0002</a></td>
                      <td>Permohonan Pengajuan Kegiatan Workshop Bilibili</td>
                      <td>23 November 2018</td>
                      <td><span class="label label-danger">Declined</span></td>
                      <td>
                        <button type="button" class="btn btn-sm btn-success btn-flat" data-toggle="modal" data-target="#modal-success">Restore</button>
                        <button type="button" class="btn btn-sm btn-danger btn-flat" data-toggle="modal" data-target="#modal-danger">Delete</button>
                      </td>
                    <tr>
                      <td><a href="../document-detail/document-detail.html">DA0001</a></td>
                      <td>Permohonan Pengajuan Cuti 3 Hari</td>
                      <td>29 October 2018</td>
                      <td><span class="label label-danger">Declined</span></td>
                      <td>
                        <button type="button" class="btn btn-sm btn-success btn-flat" data-toggle="modal" data-target="#modal-success">Restore</button>
                        <button type="button" class="btn btn-sm btn-danger btn-flat" data-toggle="modal" data-target="#modal-danger">Delete</button>
                      </td>
                    </tr>
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

  <div class="modal modal-danger fade" id="modal-danger">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><b>Delete</b> This Document</h4>
        </div>
        <div class="modal-body">
          <p>Do You Want to <b>Permanently Delete</b> this Document ?</p>
        </div>
        <div class="modal-footer">
          <a href="../document-archieved/document-archieved.html"><button type="button" class="btn btn-outline">Yes</button></a>
          <button type="button" class="btn btn-outline" data-dismiss="modal">No</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <div class="modal modal-success fade" id="modal-success">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><b>Restore</b> This Document</h4>
        </div>
        <div class="modal-body">
          <p>Do You Want to <b>Restore</b> this Document Status?</p>
        </div>
        <div class="modal-footer">
          <a href="../document-archieved/document-archieved.html"><button type="button" class="btn btn-outline">Yes</button></a>
          <button type="button" class="btn btn-outline" data-dismiss="modal">No</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <!-- Modal End -->

  <!-- Navigation Tab End -->

</section>
<!-- /.content -->
@endsection
