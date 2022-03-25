<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Berita</title>

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

    @isset($berita)
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
                                <div class="col-lg-12">
                                    <h1 class="page-header">
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row -->
                            <!-- TABLE -->
                            <div class="col-lg-12">
                                <div class="panel panel-default card p-6">
                                    <div class="card-header fs-3">Membuat Berita</div>
                                    <div class="panel-heading">
                                            <a href="{{ route('berita.create') }}"
                                            class="btn btn-sm btn-primary float-rigth my-2 mx-2">Tambah</a><br><br>
                                    </div>
                                    <!-- /.panel-heading -->
                                    <div class="panel-body">
                                        <div class="table-responsive table-bordered">
                                            <table class="table display" id="table_id">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Judul</th>
                                                        <th>Isi</th>
                                                        <th>Kategori</th>
                                                        <th>Tag</th>
                                                        <th>Poto</th>
                                                        <th>Nama penulis</th>
                                                        <th>Tanggal</th>
                                                        <th>aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php  $no=1; @endphp
                                                    @foreach ($berita as $data)
                                                        <tr>
                                                            <td>{{ $no++ }}</td>
                                                            <td>{{ $data->judul }}</td>
                                                            <td>{!! Str::limit($data->isi, 50, '...') !!}</td>
                                                            <td>{{ $data->kategori->nama_kategori }}</td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    @foreach ($data->tags as $tag)
                                                                    <span
                                                                        class="badge rounded-pill bg-info text-dark mx-1">{{ $tag->nama }}</span>
                                                                @endforeach
                                                                </div>

                                                            </td>
                                                            <td><img src="{{ $data->image() }}" alt=""
                                                                    style="width:150px; height:150px;" alt="poto"></td>

                                                            <td>{{ $data->user->name }}</td>
                                                            <td>{{ $data->created_at->isoFormat('MMMM Do YYYY, h:mm:ss a') }}
                                                            </td>
                                                            <td>
                                                                <div class="d-flex">

                                                                    <a href="{{ route('berita.edit', $data->id) }}"
                                                                        class="btn btn-success mx-1">Ubah</a>
                                                                    <a href="{{ route('berita.show', $data->id) }}"
                                                                        class="btn btn-warning mx-1">Tampil</a>
                                                                    <form
                                                                        action="{{ route('berita.destroy', $data->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('DELETE')

                                                                        <button type="submit" class="btn btn-danger"
                                                                            onclick="return confirm('Apakah anda yakin menghapus ini?');">Hapus</button>
                                                                    </form>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>

                                            </table>
                                        </div>
                                        <!-- Begin Page Content -->

                                        <!-- End of Main Content -->

                                        <!-- Footer -->
                                        <footer class="sticky-footer bg-white">
                                            <div class="container my-auto">
                                                <div class="copyright text-center my-auto">
                                                    <span>Copyright &copy; By Silvia</span>
                                                </div>
                                            </div>
                                        </footer>
                                        <!-- End of Footer -->

                                    </div>
                                    <!-- End of Content Wrapper -->

                                </div>
                            @endisset
                            <!-- Page Wrapper -->

                            <!-- End of Page Wrapper -->

                            <!-- Scroll to Top Button-->
                            <a class="scroll-to-top rounded" href="#page-top">
                                <i class="fas fa-angle-up"></i>
                            </a>

                            <!-- Logout Modal-->
                            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                            <button class="close" type="button" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true"></span>
                                            </button>
                                        </div>
                                        <div class="modal-body">Select "Logout" below if you are ready to end your
                                            current session.</div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button"
                                                data-dismiss="modal">Cancel</button>
                                            <a class="btn btn-primary" href="login.html">Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                            <script>
                                $(document).ready(function() {
                                    $('#table_id').DataTable();
                                });
                            </script>
                            <script src="{{ asset('datatable/bootstap.min.js') }}"></script>
                            <script src="{{ asset('datatable/bootstap.min.js') }}"></script>
                            <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js" defer>
                            </script>


</body>

</html>
