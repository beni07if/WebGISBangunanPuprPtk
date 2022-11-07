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
        <a href="#" class="nav-link">Edit Dokumentasi</a>
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
            <h3 class="card-title">Edit Dokumentasi</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="col-md-8">

                <!-- Horizontal Form -->
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Edit Dokumentasi</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    @foreach($dokumentasi as $doc)
                    <form class="form-horizontal" method="POST" action="{{ route('dokumentasi.update', $doc->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="nomor_ruas" class="col-sm-2 col-form-label">Nomor Ruas</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nomor_ruas" value="{{$doc->nomor_ruas}}" id="nomor_ruas" placeholder="Nomor Ruas">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama_ruas" class="col-sm-2 col-form-label">Nama Ruas</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_ruas" value="{{$doc->nama_ruas}}" id="nama_ruas" placeholder="Nama Ruas">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kecamatan" value="{{$doc->kecamatan}}" id="kecamatan" placeholder="Pontianak ..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kelurahan" class="col-sm-2 col-form-label">Kelurahan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kelurahan" value="{{$doc->kelurahan}}" id="kelurahan" placeholder="Kelurahan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="dokumentasi" class="col-sm-2 col-form-label">Dokumentasi</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="dokumentasi" value="{{$doc->dokumentasi}}" id="dokumentasi" placeholder="..">
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