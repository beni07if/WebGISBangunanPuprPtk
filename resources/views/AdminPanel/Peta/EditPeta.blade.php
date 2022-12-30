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
        <a href="#" class="nav-link">Edit Peta</a>
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
            <a href="{{ route('tambahJalan') }}" class="btn btn-primary">Add Dokumentasi</a>
        </div> -->
        <div class="card-header">
            <h3 class="card-title">Edit Peta</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="col-md-8">

                <!-- Horizontal Form -->
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Edit Peta</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    @foreach($peta as $petta)
                    <form class="form-horizontal" method="POST" action="{{ route('peta-layout.update', $petta->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="judul_peta" class="col-sm-3 col-form-label">judul_peta</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="judul_peta" value="{{$petta->judul_peta}}" id="kecamatan" placeholder="Pontianak ..">
                                </div>
                            </div>
                            <!-- <div class="form-group row">
                                <label for="psjj" class="col-sm-3 col-form-label">Peta Sebaran Bangunan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="psjj" value="{{$petta->psjj}}" id="kelurahan" placeholder="Kelurahan">
                                </div>
                            </div> -->
                            <div class="form-group row">
                                <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="keterangan" value="{{$petta->keterangan}}" id="kelurahan" placeholder="Kelurahan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="peta" class="col-sm-3 col-form-label">Peta</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="peta" value="{{$petta->peta}}" id="dokumentasi" placeholder="..">
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
                    @endforeach
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.content -->
</div>
@endsection