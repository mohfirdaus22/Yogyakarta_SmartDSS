<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Smart DSS Kota Yogyakarta</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('lte/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('lte/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('lte/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('lte/plugins/summernote/summernote-bs4.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('layout.aside')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Permintaan Download</h1>
            </div>
          </div>
        </div>
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div style="text-align: right;">
                    <a href="{{ route('permintaans.create') }}" class="btn btn-success">Tambah Data</a>
                  </div>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Judul Kajian</th>
                        <th>Tahun</th>
                        <th>ID JSS</th>
                        <th>Nama Lengkap</th>
                        <th>Alamat Email</th>
                        <th>Keperluan</th>
                        <th>Instansi</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Readed</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($permintaans as $index => $data)
                      <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $data->judul }}</td>
                        <td>{{ $data->tahun }}</td>
                        <td>{{ $data->jss }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->keperluan }}</td>
                        <td>{{ $data->instansi }}</td>
                        <td>{{ $data->tanggal }}</td>
                        <td>{{ $data->status == 1 ? 'Dibaca' : 'Belum Dibaca'}}</td>
                        <td>{{ $data->readed == 1 ? 'Dibaca' : 'Belum Dibaca' }}</td>
                        <td>
                          <a href="{{ route('permintaans.edit', $data->id) }}" class="btn btn-primary">Edit</a>
                          <form action="{{ route('permintaans.destroy', $data->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
  </div>

  <!-- jQuery -->
  <script src="{{asset('lte/plugins/jquery/jquery.min.js')}}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{asset('lte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- ChartJS -->
  <script src="{{asset('lte/plugins/chart.js/Chart.min.js')}}"></script>
  <!-- Sparkline -->
  <script src="{{asset('lte/plugins/sparklines/sparkline.js')}}"></script>
  <!-- JQVMap -->
  <script src="{{asset('lte/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
  <script src="{{asset('lte/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{asset('lte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
  <!-- daterangepicker -->
  <script src="{{asset('lte/plugins/moment/moment.min.js')}}"></script>
  <script src="{{asset('lte/plugins/daterangepicker/daterangepicker.js')}}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{asset('lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
  <!-- Summernote -->
  <script src="{{asset('lte/plugins/summernote/summernote-bs4.min.js')}}"></script>
  <!-- overlayScrollbars -->
  <script src="{{asset('lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('lte/dist/js/adminlte.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <!-- DataTables -->
  <script src="{{asset('lte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('lte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
  <script src="{{asset('lte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{asset('lte/plugins/jszip/jszip.min.js')}}"></script>
  <script src="{{asset('lte/plugins/pdfmake/pdfmake.min.js')}}"></script>
  <script src="{{asset('lte/plugins/pdfmake/vfs_fonts.js')}}"></script>
  <script src="{{asset('lte/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{asset('lte/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{asset('lte/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": true,
        "autoWidth": false, // Disable auto width to enable custom width settings
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        "columns": [{
            "width": "5%"
          }, // No
          {
            "width": "15%"
          }, // Judul Kajian
          {
            "width": "10%"
          }, // Tahun
          {
            "width": "10%"
          }, // ID JSS
          {
            "width": "15%"
          }, // Nama Lengkap
          {
            "width": "8%"
          }, // Alamat Email
          {
            "width": "10%"
          }, // Keperluan
          {
            "width": "10%"
          }, // Instansi
          {
            "width": "10%"
          }, // Tanggal
          {
            "width": "10%"
          }, // Status
          {
            "width": "10%"
          }, // Readed
          {
            "width": "15%"
          } // Actions
        ],
        "language": {
          "lengthMenu": "Tampilkan _MENU_ entri per halaman",
          "zeroRecords": "Tidak ada data yang ditemukan",
          "info": "Menampilkan _PAGE_ dari _PAGES_ halaman",
          "infoEmpty": "Tidak ada data yang tersedia",
          "infoFiltered": "(difilter dari _MAX_ total entri)",
          "search": "Cari:",
          "paginate": {
            "first": "Pertama",
            "last": "Terakhir",
            "next": "Berikutnya",
            "previous": "Sebelumnya"
          },
        }
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
  </script>
</body>

</html>