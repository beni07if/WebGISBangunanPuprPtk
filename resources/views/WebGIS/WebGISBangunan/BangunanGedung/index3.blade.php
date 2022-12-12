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
                <!-- adminlte inc  -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="callout callout-info" style="text-align: right;">
                                    <h5> Lampiran Suran:</h5>
                                    Nomor : <br>
                                    Tanggal :
                                </div>


                                <!-- Main content -->
                                <div class="invoice p-3 mb-3">
                                    <!-- title row -->
                                    <div class="row">
                                        <div class="col-12">
                                            <h2>
                                                ANALISIS KEBUTUHAN BIAYA PENGGANTIAN KOMPONEN DALAM RANGKA PERAWATAN BANGUNAN GEDUNG NEGARA
                                            </h2>
                                        </div>
                                        <!-- /.col -->
                                    </div>

                                    <div class="row">
                                        <!-- accepted payments column -->
                                        <div class="col-6">
                                            <!-- <p class="lead">Amount Due 2/22/2014</p> -->

                                            <div class="table-responsive">
                                                <table class="table">
                                                    @foreach($detailBangunan as $db)
                                                    <tr>
                                                        <td style="widtd:50%">Nama Bangunan</td>
                                                        <td><b>: {{$db->nama_bangunan}}</b></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tahun Dibangun</td>
                                                        <td>: {{$db->tahun_dibangun}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah Tingkat:</td>
                                                        <td>: {{$db->jumlah_tingkat}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas Total Lantai Dibangun</td>
                                                        <td>: {{$db->ttlb}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas Lantai Basement</td>
                                                        <td>: {{$db->llb}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Koefisien Lantai Dibangun</td>
                                                        <td>: {{$db->klb}}</td>
                                                    </tr>
                                                    @endforeach
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-6">
                                            <!-- <p class="lead">Amount Due 2/22/2014</p> -->

                                            <div class="table-responsive">
                                                <table class="table">
                                                    @foreach($detailBangunan as $db)
                                                    <tr>
                                                        <td>Fungsi Bangunan Ruang</td>
                                                        <td>: {{$db->fbr}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Klasifikasi Bangunan</td>
                                                        <td>: {{$db->klasifikasi_bangunan}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="widtd:50%">LEMBAGA</td>
                                                        <td>: {{$db->lembaga}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>PEMAKAI</td>
                                                        <td>: {{$db->pemakai}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ALAMAT:</td>
                                                        <td>{{$db->alamat}}</td>
                                                    </tr>
                                                    @endforeach
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div><br>
                                    <!-- /.row -->

                                    <!-- title row -->
                                    <div class="row">
                                        <div class="col-12">
                                            <h4>
                                                DASAR ANALISIS
                                            </h4>
                                            <ol>
                                                <li>Peraturan Menteri Pekerjaan Umum Nomor 22/PRT/M/2018 tanggal 14 September 2018 tentang Harga Satuan Bangunan Gedung Negara
                                                </li>
                                                <li>Peraturan Walikota Pontianak Nomor 95 tahun 2021 tentang Harga Satuan Bangunan Gedung Negara (HSBGN)
                                                </li>
                                            </ol>
                                        </div>
                                        <div class="col-12">
                                            <h4>
                                                KEBUTUHAN BIAYA PENGGANTIAN KOMPONEN PEKERJAAN STANDAR
                                            </h4>
                                            <p>A. Analisis Komponen Pekerjaan Standar
                                            </p>
                                        </div>
                                        <!-- /.col -->
                                    </div>

                                    <!-- Table row -->
                                    <div class="row">
                                        <div class="col-12 table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Pekerjaan</th>
                                                        <th>Uraian Pekerjaan</th>
                                                        <th>TSB</th>
                                                        <th>Bobot Maksimum</th>
                                                        <th>Bobot (%)</th>
                                                        <th>Nilai(%)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 0; ?>
                                                    @foreach($uraianp1 as $uraian1)
                                                    <?php $no++; ?>
                                                    <tr>
                                                        <td>{{$no}}</td>
                                                        <td>{{$uraian1->uraian_pekerjaan1}}</td>
                                                        <td>{{$uraian1->uraian_pekerjaan2}}</td>
                                                        <td>{{$uraian1->tsb}}</td>
                                                        <td>{{$uraian1->bobot_maksimum}}</td>
                                                        <td>{{$uraian1->bobot}}</td>
                                                        <td>{{$uraian1->nilai}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.col -->
                                    </div><br><br>
                                    <!-- /.row -->

                                    <div class="row">
                                        <!-- accepted payments column -->
                                        <div class="col-8">
                                            <p>KESIMPULAN ANALISA HASIL PENGAMATAN LAPANGAN
                                                :</p>
                                            <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                                            <ul>
                                                @foreach($detailBangunan as $db)
                                                <li>Tingkat (%) Kerusakan = {{$db->kerusakan}}</li>
                                                <li>Jenis Tingkat Kerusakan = {{$db->jenis_tk}}</li>
                                                <li>Jenis Perawatan= {{$db->jenis_perawatan}}</li>
                                                @endforeach
                                            </ul>
                                            </p>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-4">
                                            <!-- <p class="lead">Amount Due 2/22/2014</p> -->

                                            <div class="table-responsive">
                                                <table class="table">
                                                    @foreach($detailBangunan as $db)
                                                    <tr>
                                                        <td>Ringan</td>
                                                        <td>: {{$db->kerusakan_ringan}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sedang</td>
                                                        <td>: {{$db->kerusakan_sedang}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Berat</td>
                                                        <td>: {{$db->kerusakan_berat}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Khusus</td>
                                                        <td>: {{$db->kerusakan_khusus}}</td>
                                                    </tr>
                                                    @endforeach
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->

                                    <!-- this row will not appear when printing -->
                                    <!-- <div class="row no-print">
                                        <div class="col-12">
                                            <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                                            <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                                                Payment
                                            </button>
                                            <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                                <i class="fas fa-download"></i> Generate PDF
                                            </button>
                                        </div>
                                    </div> -->
                                </div>
                                <!-- /.invoice -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
                <!-- adminlte inc end  -->
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