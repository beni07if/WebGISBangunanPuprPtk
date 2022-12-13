@extends('AdminPanel.Layout.App')

@section('tagheader')
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Tambah Sub Bangunan</a>
    </li>
</ul>
@endsection('tagheader')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="card">
        <!-- <div class="card-footer">
            <a href="{{ route('tambahJalan') }}" class="btn btn-primary">Add Data Jalan</a>
        </div> -->
        <div class="card-header">
            <h3 class="card-title">Sub Bangunan</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="col-md-8">

                <!-- Horizontal Form -->
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Sub Bangunan</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="POST" action="{{ route('bangunan2.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="provinsi" class="col-sm-2 col-form-label">Bangunan</label>
                                <div class="col-sm-10">
                                    <!-- <input type="text" class="form-control" name="provinsi" id="provinsi" placeholder=".."> -->
                                    <!-- <label>Minimal</label> -->
                                    <select class="form-control select2" name="bangunan_id" style="width: 100%;">
                                        @foreach($bangunan1 as $bgn)
                                        <option selected="selected" value="{{$bgn->id}}">{{$bgn->bangunan}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="bangunan2" class="col-sm-2 col-form-label">Sub Bangunan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="bangunan2" id="bangunan2" placeholder="Sub Bangunan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tingkat_kerusakan" class="col-sm-2 col-form-label">Tingkat Kerusakan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tingkat_kerusakan" id="tingkat_kerusakan" placeholder="Tingkat Kerusakan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan">
                                </div>
                            </div>
                        </div>
                </div>

                <!-- /.card-header -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Simpan</button>
                    <!-- <button type="submit" class="btn btn-default float-right">Batal</button> -->
                </div>
                <!-- /.card-body -->

                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.content -->
</div>
@endsection