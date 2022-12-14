@extends('WebGIS.Layouts.App')

@section('Content')
<!-- ======= Hero SectisonSssd ======= -->
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Database Bangunan Gedung PUPR Pontianak</h1>
                <!-- <h2 data-aos="fade-up" data-aos-delay="400">Website Pembangunan Bangunan oleh Dinas PUPR Kota Pontianak</h2> -->
                <h2 data-aos="fade-up" data-aos-delay="400">adalah Sitem Informasi Geografis Cipta Karya Bangunan Kota Pontianak, data/informasi yang ditampilkan dalam bentuk tabel dan peta. </h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <!-- <a href="{{ route('peta2') }}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Jelajah Peta</span>
                            <i class="bi bi-arrow-right"></i>
                        </a> -->
                        <!-- <a href="assets/img/video/tutorial-webgis-psktp.mp4" target="_blank" class="glightbox btn-watch-video btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center"><i class="bi bi-play-circle"></i><span>Video Singkat WebGIS PS Ketapang</span></a> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="assets/img/peta-pontianak/bangunan-ptk3.png" class="img-fluid" alt="">
            </div>
            <!-- <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <h1>Better Solutions For Your Business</h1>
                <h2>We are team of talented designers making websites with Bootstrap</h2>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    <a href="assets/img/video/video-psktp.mp4" target="_blank" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
                </div>
            </div> -->

        </div>
    </div>

</section><!-- End Hersossssssssss -->

<main id="main">

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

        <div class="container" data-aos="fade-up">

            <!-- Feature Tabs -->
            <div class="row feture-tabs" data-aos="fade-up">
                <div class="col-lg-6">
                    <h3>Database Bangunan Gedung PUPR Pontianak</h3>

                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3">
                        <!-- <li>
                            <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Perhutanan Sosial</a>
                        </li> -->
                        <!-- <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#tab2">Skema PS</a>
                        </li> -->
                        <!-- <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#tab3">Corrupti</a>
                        </li> -->
                    </ul><!-- End Tabs -->

                    <!-- Tab Content -->
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="tab1">
                            <p style="text-align: justify;">
                                Database Bangunan Gedung PUPR Pontianak merupakan aplikasi Geographic Information System (GIS) yang dapat diakses secara online melalui internet/web. Database jaringan Bangunan Kota Pontianak sangat dibutuhkan untuk meningkatkan kualitas pengaturan dalam penyelenggaran Bangunan dengan kualitas kebutuhan dan konektivitas antar wilayah yang optimal. Database yang disusun memiliki sifat yang informatif, akurat, transparansi, dapat dipertanggungjawabkan dan berkelanjutan. Informasi jaringan Bangunan yang telah dilakukan berupa peta manual maupun peta digital yang belum menggunakan internet, terbatas dan sulit diakses.
                            </p>
                            <p style="text-align: justify;">
                                Database Bangunan Gedung PUPR Pontianak adalah Sitem Informasi Geografis Cipta Karya Bangunan Kota Pontianak, data/informasi yang ditampilkan dalam bentuk tabel, grafik, dan peta. Dengan adanya WebGIS Bangunan dapat memonitor pekembangan infrastruktur jaringan Bangunan di Kota Pontianak serta pengambilan kebijakan yang akurat.
                            </p>
                            <h4>Link Terkait</h4><br>
                            <div class="col-lg-12 mt-5 mt-lg-0 d-flex">
                                <div class="row align-self-center gy-4">
                                    <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                                        <div class="feature-box d-flex align-items-center">
                                            <!-- <i class="bi bi-check"></i> -->
                                            <a href="https://jdih.maritim.go.id/en/peraturan-menteri-lingkungan-hidup-dan-kehutanan-no-9-tahun-2021" target="_blank">
                                                <h4>Link Terkait 1</h4>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                                        <div class="feature-box d-flex align-items-center">
                                            <!-- <i class="bi bi-check"></i> -->
                                            <a href="https://jdih.setkab.go.id/PUUdoc/176365/PP_Nomor_23_Tahun_2021.pdf" target="_blank">
                                                <h4>Link Terkait 2</h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Tab 1 Content -->


                    </div>

                </div>

                <div class="col-lg-6">
                    <img src="assets/img/peta-pontianak/Bangunan-ptk.JPG" class="img-fluid" alt="">
                </div>

            </div><!-- End Feature Tabs -->

            <!-- Feature Icons -->
            <!-- <div class="row feature-icons" data-aos="fade-up">
                <h3>Other Information</h3>

                <div class="row">

                    <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="assets/img/features-3.png" class="img-fluid p-4" alt="">
                    </div>

                    <div class="col-xl-8 d-flex content">
                        <div class="row align-self-center gy-4">

                            <div class="col-md-6 icon-box" data-aos="fade-up">
                                <i class="ri-line-chart-line"></i>
                                <div>
                                    <h4>Corporis voluptates sit</h4>
                                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="ri-stack-line"></i>
                                <div>
                                    <h4>Ullamco laboris nisi</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <i class="ri-brush-4-line"></i>
                                <div>
                                    <h4>Labore consequatur</h4>
                                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="ri-magic-line"></i>
                                <div>
                                    <h4>Beatae veritatis</h4>
                                    <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                <i class="ri-command-line"></i>
                                <div>
                                    <h4>Molestiae dolor</h4>
                                    <p>Et fuga et deserunt et enim. Dolorem architecto ratione tensa raptor marte</p>
                                </div>
                            </div>

                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                                <i class="ri-radar-line"></i>
                                <div>
                                    <h4>Explicabo consectetur</h4>
                                    <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div> -->
            <!-- End Feature Icons -->
        </div>

    </section>
    <!-- End Features Section -->
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <!-- <h2>Mitra Yang Terlibat</h2> -->
                <p>Didukung oleh</p>
            </header>

            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="assets/img/peta-pontianak/logo-pontianak.jpg" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/peta-pontianak/logo-pupr.png" class="img-fluid" alt=""></div>
                    <!-- <div class="swiper-slide"><img src="assets/img/peta-pontianak/kph.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/peta-pontianak/aid.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/peta-pontianak/sbl.png" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/peta-pontianak/jari.png" class="img-fluid" alt=""></div> -->
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

    </section>
    <!-- End Clients Section -->

</main>
<!-- End #main -->
@endsection

@section('IndexJs')
<!-- Vendor JS Files -->
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