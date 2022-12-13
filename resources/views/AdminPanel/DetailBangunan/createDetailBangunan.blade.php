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
        <a href="#" class="nav-link">Tambah Detail Bangunan</a>
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
            <h3 class="card-title">Detail Bangunan</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="col-md-8">

                <!-- Horizontal Form -->
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Detail Bangunan</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="POST" action="{{ route('detail-bangunan.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="provinsi" class="col-sm-2 col-form-label">Sub Bangunan</label>
                                <div class="col-sm-10">
                                    <!-- <input type="text" class="form-control" name="provinsi" id="provinsi" placeholder=".."> -->
                                    <!-- <label>Minimal</label> -->
                                    <select class="form-control select2" name="bangunan2_id" style="width: 100%;">
                                        @foreach($bangunan2 as $bgn)
                                        <option selected="selected" value="{{$bgn->id}}">{{$bgn->bangunan2}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama_bangunan" class="col-sm-2 col-form-label">Nama Bangunan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama_bangunan" id="nama_bangunan" placeholder="Nama Bangunan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tahun_dibangun" class="col-sm-2 col-form-label">Tahun Dibangun</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tahun_dibangun" id="tahun_dibangun" placeholder="Tahun Dibangun">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah_tingkat" class="col-sm-2 col-form-label">Jumlah Tingkat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jumlah_tingkat" id="jumlah_tingkat" placeholder="Jumlah Tingkat">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ttlb" class="col-sm-2 col-form-label">TTLB</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="ttlb" id="ttlb" placeholder="TTLB">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="llb" class="col-sm-2 col-form-label">LLB</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="llb" id="llb" placeholder="LLB">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="klb" class="col-sm-2 col-form-label">KLB</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="klb" id="klb" placeholder="KLB">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fbr" class="col-sm-2 col-form-label">FBR</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="fbr" id="fbr" placeholder="FBR">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="klasifikasi_bangunan" class="col-sm-2 col-form-label">Klasifikasi Bangunan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="klasifikasi_bangunan" id="klasifikasi_bangunan" placeholder="Klasifikasi Bangunan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lembaga" class="col-sm-2 col-form-label">Lembaga</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="lembaga" id="lembaga" placeholder="Lembaga">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="pemakai" class="col-sm-2 col-form-label">Pemakai</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="pemakai" id="pemakai" placeholder="Pemakai">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
                                </div>
                            </div>
                            <div class="form-group row" hidden>
                                <label for="dasar_analisis1" class="col-sm-2 col-form-label">Dasar Analisis 1</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="dasar_analisis1" id="dasar_analisis1" placeholder="Dasar Analisis 1">
                                </div>
                            </div>
                            <div class="form-group row" hidden>
                                <label for="dasar_analisis2" class="col-sm-2 col-form-label">Dasar Analisis 2</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="dasar_analisis2" id="dasar_analisis2" placeholder="Dasar Analisis 2">
                                </div>
                            </div>
                            <div class="form-group row" hidden>
                                <label for="tingkat" class="col-sm-2 col-form-label">Tingkat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tingkat" id="tingkat" placeholder="Tingkat">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kerusakan" class="col-sm-2 col-form-label">Tingat Kerusakan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kerusakan" id="kerusakan" placeholder="Tingkat Kerusakan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jenis_tk" class="col-sm-2 col-form-label">Jenis TK</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jenis_tk" id="jenis_tk" placeholder="Jenis TK">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jenis_perawatan" class="col-sm-2 col-form-label">Jenis Perawatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jenis_perawatan" id="jenis_perawatan" placeholder="Jenis Perawatan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kerusakan_ringan" class="col-sm-2 col-form-label">Kerusakan Ringan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kerusakan_ringan" id="kerusakan_ringan" placeholder="Kerusakan Ringan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kerusakan_sedang" class="col-sm-2 col-form-label">Kerusakan Berat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kerusakan_sedang" id="kerusakan_sedang" placeholder="Kerusakan Berat">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kerusakan_berat" class="col-sm-2 col-form-label">Kerusakan Berat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kerusakan_berat" id="kerusakan_berat" placeholder="Kerusakan Berat">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kerusakan_khusus" class="col-sm-2 col-form-label">Kerusakan Khusus</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="kerusakan_khusus" id="kerusakan_khusus" placeholder="Kerusakan Khusus">
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