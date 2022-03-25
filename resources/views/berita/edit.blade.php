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
    <link href="{{asset('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('backend/css/sb-admin-2.min.css')}}" rel="stylesheet">

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
                        <div class="col-lg-12">
                            <h1 class="page-header"></h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
<!-- TABLE -->
  <div class="row">
            <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Edit Data Berita
        </div>
        <form Action="{{ route('berita.update', $berita->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="panel-body">
                <label>judul</label>
                <input type="text" class="form-control" name="judul" value="{{ $berita->judul }}">
                @error('judul')
                <span class="text-danger">Wajib Di Isi</span>
                @enderror
            </div>
            <div class="panel-body">
                <label>isi</label>
                <textarea  name="isi"  id="summary-ckeditor" class="summary-ckeditor form-control" >{{ $berita->isi }}</textarea>
                @error('isi')
                <span class="text-danger">Wajib Di Isi</span>
                @enderror
            </div>
            <div class="panel-body">
                <label> kategori</label>
                <select name="id_kategori" class="form-control">
                @foreach($kategori as $data)
                <option value="{{$data->id}}">{{$data->nama_kategori}}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label> Tag</label>
              <select name="tags[]" class="form-control multiple" id="" multiple="multiple">
                   @foreach($tags as $data)
                   <option value="{{$data->id}}">{{$data->nama}}</option>
                   @endforeach
                </select>
            </div>
            <div class="my-4">
                <label class="d-block">poto</label>
                <img src="{{ $berita->image() }}" class="img-fluid" style="height: 250px"/>
            </div>
            <div class="panel-body">
                <input class="form-control" value="{{$data->poto }}" type="file" id="poto" name="poto">

            </div>

            <div class="panel-body">
                <button type="reset" class="btn btn-warning">Reset</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </div>

<!-- TABEL -->
                    <!-- /.row -->
                    </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->


        <!-- Bootstrap core JavaScript-->
    <script src="{{asset('backend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('backend/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('backend/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('backend/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('backend/js/demo/chart-pie-demo.js')}}"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
    CKEDITOR.replace( 'summary-ckeditor' );
    </script>
</body>
</html>
