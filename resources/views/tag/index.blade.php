<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tag</title>
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

<body>
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
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Membuat Tag
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary my-4" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                    Tambah
                                    </button><br>

                                    <!-- Modal -->
                                    <form action="{{ route('tag.store') }}" method="post">
                                        @csrf
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Buat Tag</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-4"><input type="text" name="nama" id="" class="form-control"></div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">tutup</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    </form>


                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive table-bordered">
                                        <table class="table display" id="table_id">                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>slug</th>
                                                    <th>aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1; @endphp
                                                @foreach ( $tags as $data)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $data->nama }}</td>
                                                    <td>{{ $data->slug }}</td>
                                                    <td>
                                                        <div class="d-flex">

                                                            <button href="{{ route('berita.edit', $data->id) }}" class="btn btn-success mr-3"
                                                                data-bs-toggle="modal"data-bs-target="#editModal-{{ $data->id }}">Ubah</button>
                                                                <form action="{{ route('tag.destroy', $data->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus ini?');">Hapus</button>
                                                            </form>
                                                            <form action="{{ route('tag.update', $data->id) }}" method="post">
                                                            @csrf
                                                            @method('put')

                                                            <div class="modal fade" id="editModal-{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                  <div class="modal-content">
                                                                    <div class="modal-header">
                                                                      <h5 class="modal-title" id="exampleModalLabel">{{ $data->nama }}</h5>
                                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                      <input type="text" name="nama" class="form-control" value="{{ $data->nama }}">
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">tutup</button>
                                                                      <button type="submit" class="btn btn-primary">Edit</button>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
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
                            <script src="{{ asset('js/app.js') }}"></script>
</body><script>
    $(document).ready(function() {
        $('#table_id').DataTable();
    });
</script>
<script src="{{ asset('datatable/bootstap.min.js') }}"></script>
<script src="{{ asset('datatable/bootstap.min.js') }}"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js" defer>
</script>

</html>
