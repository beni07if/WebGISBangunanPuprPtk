@extends('WebGIS.Layouts.App')

@section('Content')

<main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">

        <div class="container" data-aos="fade-up">

            <header class="section-header" style="padding-top: 150px;">
                <!-- <h2>Portfolios</h2> -->
                <p>Peta Bangunan Gedung PUPR Pontianak</p>
            </header>

            <!-- <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".benua-krio">Peta Jaringan Jalan Kota</li>
                        <li data-filter=".gema">Peta Jaringan Jalan Per-Kecamatan</li>
                    </ul>
                </div>
            </div> -->

            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                @foreach($peta as $petta)
                <!-- gema starsss  -->
                <div class="col-lg-4 col-md-6 portfolio-item gema">
                    <div class="portfolio-wrap">
                        <img src="assets/img/peta/{{$petta->peta}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <!-- <h4>App 1</h4>
                            <p>App</p> -->
                            <div class="portfolio-links">
                                <!-- <a href="assets/img/peta/{{$petta->peta}}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="" download=""><i class="bi bi-plus"></i></a> -->
                                <a href="assets/img/peta/{{$petta->peta}}" title="" download=""><i class="bi bi-download"></i></a>
                                <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="col-lg-4 col-md-6 portfolio-item gema" hidden>
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets/img/galery/gema/2.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <!-- <h4>Web 3</h4>
                            <p>Web</p> -->
                            <div class="portfolio-links">
                                <a href="{{ asset('assets/img/galery/gema/2.jpg') }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title=""><i class=" bi bi-plus"></i></a>
                                <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>

    </section><!-- End Portfolio Section -->

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