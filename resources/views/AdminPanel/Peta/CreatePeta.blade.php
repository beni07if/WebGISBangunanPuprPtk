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
        <a href="#" class="nav-link">Tambah Peta</a>
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
            <h3 class="card-title">Peta</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="col-md-8">

                <!-- Horizontal Form -->
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Peta</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="POST" action="{{ route('peta-layout.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="judul_peta" class="col-sm-3 col-form-label">Judul Peta</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="judul_peta" id="judul_peta" placeholder="Judul peta ..">
                                </div>
                            </div>
                            <!-- <div class="form-group row">
                                <label for="psjj" class="col-sm-3 col-form-label">Sebaran Bangunan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="psjj" id="psjj" placeholder="Peta sebaran jaringan jalan ..">
                                </div>
                            </div> -->
                            <div class="form-group row">
                                <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="peta" class="col-sm-3 col-form-label">Peta</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="peta" id="peta" placeholder="..">
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