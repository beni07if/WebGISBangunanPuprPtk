@extends('WebGIS.Layouts.App')

@section('Content')

<main id="main">
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

        </div>
    </section>
    <!-- End Counts Section -->


    <!-- lll  -->
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <!-- /.col -->
                <div class="col-md-12">
                    <h2>ANALISIS TINGKAT KERUSAKAN BANGUNAN GEDUNG PEMERINTAH KOTA PONTIANAK TAHUN 2022 (Detail)
                    </h2>
                    <div class="card">
                        <div class="card-header">
                            <!-- <h3 class="card-title">Kondisi Jalan Detail</h3> -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example4" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Bangunan</th>
                                        <th>Tingkat Kerusakan</th>
                                        <th>Keterangan</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0; ?>
                                    @foreach($bangunan as $bangunans)
                                    @foreach($bangunans->Bangunan2 as $bangunan2s)
                                    <?php $no++; ?>
                                    <tr>
                                        <td>{{$no}}</td>
                                        <td>{{$bangunan2s->bangunan2}}</td>
                                        <td>{{$bangunan2s->tingkat_kerusakan}}</td>
                                        <td>{{$bangunan2s->keterangan}}</td>
                                        <td><a href="{{route('DetailBangunanLengkap', $bangunan2s->id)}}" class="btn btn-info btn-xs">Detail</a></td>
                                    </tr>
                                    @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.col -->
            </div>



        </div>
    </section>
    <!-- End About Us Section -->
    <!-- lll  -->

</main>
<!-- End #main -->
@endsection

@section('IndexJs')
<!-- Vendor JS Filess -->
<script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

@endsection