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
        <a href="#" class="nav-link">Peta</a>
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
        <div class="col-md-4">
            @if(session()->get('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i>Berhasil</h5>
                {{ session()->get('success') }}
            </div>
            @endif
        </div>
        <div class="card-footer">
            <a href="{{ route('peta-layout.create') }}" class="btn btn-info">Tambah Peta</a>
        </div>
        <div class="card-header">
            <h3 class="card-title">Peta</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Peta</th>
                        <th>Keterangan</th>
                        <th>Peta</th>
                        <th>Detail</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0; ?>
                    @foreach($peta as $petta)
                    <?php $no++; ?>
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{$petta->judul_peta}}</td>
                        <td>{{$petta->keterangan}}</td>
                        <td><a href="assets/img/peta/{{$petta->peta}}" class="btn btn-info btn-xs" target="_blank"> {{$petta->peta}}</a></td>
                        <td><a href="{{route('peta-layout.edit', $petta->id)}}" class="btn btn-warning btn-xs swallDefaulSuccess">Edit</a></td>
                        <td>
                            <form action="{{ route('peta-layout.destroy', $petta->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-xs swalDefaultDeleteMahasiswa" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.content -->
</div>
@endsection