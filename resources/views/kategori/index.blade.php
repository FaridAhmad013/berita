<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Kategori</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('backend/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('datatable/style.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.bagian.sidebar')

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('layouts.bagian.navbar')
                <!-- End of Topbar -->


                <div id="page-wrapper">
                    <div class="container-fluid">
                        <div class="row">

                            <!-- /.col-lg-12 -->
                        </div>
                        <!-- /.row -->
                        <!-- TABLE -->
                        <div class="col-lg-12">
                            <div class="panel panel-default card p-6">
                                <div class="card-header fs-3">Membuat Kategori</div>
                                <div class="panel-heading my-3 mx-2">
                                    <a href="{{ route('kategori.create') }}" class="btn btn-primary float-right">Tambah
                                        Data</a><br>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive table-bordered">
                                        <table class="table display" id="table_id">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kategori</th>
                                                    <th>Aksi</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php  $no=1; @endphp
                                                @foreach ($kategori as $data)
                                                    <tr>
                                                        <td>{{ $no++ }}</td>
                                                        <td>{{ $data->nama_kategori }}</td>
                                                        <td>
                                                            <form action="{{ route('kategori.destroy', $data->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')

                                                                <a href="{{ route('kategori.edit', $data->id) }}"
                                                                    class="btn btn-success">Ubah</a>
                                                                {{-- <a href="{{ route('kategori.show', $data->id) }}"
                                                                    class="btn btn-warning">Tampil</a> --}}
                                                                <button type="submit" class="btn btn-danger"
                                                                    onclick="return confirm('Apakah anda yakin menghapus ini?');">Hapus</button>
                                                            </form>
                                                        </td>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /#page-wrapper -->

            </div>
            <!-- /#wrapper -->

            <!-- Bootstrap core JavaScript-->
            <script src="{{ asset('backend/vendor/jquery/jquery.min.js') }}"></script>
            <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

            <!-- Core plugin JavaScript-->
            <script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

            <!-- Custom scripts for all pages-->
            <script src="{{ asset('backend/js/sb-admin-2.min.js') }}"></script>

            <!-- Page level plugins -->
            <script src="{{ asset('backend/vendor/chart.js/Chart.min.js') }}"></script>

            <!-- Page level custom scripts -->
            <script src="{{ asset('backend/js/demo/chart-area-demo.js') }}"></script>
            <script src="{{ asset('backend/js/demo/chart-pie-demo.js') }}"></script>

</body>     <script>
    $(document).ready(function() {
        $('#table_id').DataTable();
    });
</script>
<script src="{{ asset('datatable/bootstap.min.js') }}"></script>
<script src="{{ asset('datatable/bootstap.min.js') }}"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js" defer>
</script>


</html>
