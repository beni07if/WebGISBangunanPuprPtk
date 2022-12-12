<!DOCTYPE html>
<html lang="en">

<head>
    @include('WebGIS.Layouts.HeadStyle')
    <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>
    <!-- ======= Headessrss ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{ route('index') }}" class="logo d-flex align-items-center">
                <img src="assets/img/logo/bangunan2.png" alt="">
                <!-- <span>WebGIS PS Ketapang</span> -->
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}">HOME</a></li>
                    <!-- <li><a class="nav-link scrollto" href="{{ route('data') }}">DATA</a></li> -->
                    <li><a class="nav-link scrollto" href="{{ route('peta2') }}">PETA</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('BangunanGedung') }}">DATA BANGUNAN</a></li>
                    <!-- <li class="dropdown"><a href="#"><span>BANGUNAN GEDUNG</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ route('data') }}">Data Bangunan Gedung</a></li>
                            <li><a href="{{ route('kondisiJalan') }}">Data Kerusakan Gedung</a></li>
                        </ul>
                    </li> -->
                    <!-- <li><a class="nav-link scrollto" href="{{ route('galery') }}">GALERY</a></li> -->
                    <li><a class="nav-link scrollto" href="{{ route('galery') }} ">DOWNLOAD</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('contact') }} ">CONTACT</a></li>
                    <!-- <li><a class="getstarted scrollto" href="{{ route('petaJs') }}">PetaJs</a></li> -->
                    <!-- <li><a class="getstarted scrollto" href="{{ route('peta3') }}">Peta 3</a></li> -->
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    @yield('Content')
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <!-- <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    </div>
                    <div class="col-lg-6">
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-2 col-md-12 footer-info">
                        <!-- <a href="index.html" class="logo d-flex align-items-center">
                            <img src="assets/img/logo/aiden.png" alt="">
                            <span>PS Ketapang</span>
                        </a>
                        <p>Website penyedia persebaran Perhutanan Sosial (HD dan HKm) di Kabupaten Ketapang..</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div> -->
                    </div>

                    <div class="col-lg-4 col-6 footer-links">
                        <h4>Layanan Kami</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('index') }}#hero">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('index') }}#about">Data</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('peta2') }}">Peta</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('galery') }}">Galery</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('download') }}">Download</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('index') }}#team">Contact</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('dashboard2') }}#team">Login</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-6 col-6 footer-links">
                        <h4>Map Lokasi</h4>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63837.080944634115!2d109.29653098007158!3d-0.035394843388718976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d58f604b0799b%3A0x511ef9501fc9ffe3!2sPontianak%2C%20Kota%20Pontianak%2C%20Kalimantan%20Barat!5e0!3m2!1sid!2sid!4v1666024228457!5m2!1sid!2sid" width="450" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <!-- <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Kontak Kami</h4>
                        <p>
                            <strong>Lembaga:</strong>Aidenvironment Asia/ Yayasan Sangga Bumi Lestari <br>
                            <strong>Alamat:</strong>Jalan Kol Sugiono Gang Sulaiman Nomor 1A,Sampit, Kec Delta Pawan, Kabupaten Ketapang, Kalimantan Barat
                            78811
                            <br>
                            <strong>Phone:</strong> (021) 502 001 97<br>
                            <strong>Email:</strong> Info@aidenvironment.org<br>
                            <strong>Website:</strong> <i><a href="https://aidenvironment.org" target="_blank">www.aidenvironment.org</a></i>
                        </p>

                    </div>
                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4></h4> <br>
                        <p>
                            <strong>Instansi:</strong>UPT. KPH Wilayah Ketapang Utara <br>
                            <strong>Alamat:</strong>Jl. Letkol M. Thohir No 11 A Ketapang<br>
                            <strong>Phone:</strong> +62 821-3855-1555 (Abdul Karim)<br>
                            <strong>Email:</strong> limabelassamarinda@gmail.com<br>
                        </p>

                    </div>
                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4></h4><br>
                        <p>
                            <strong>Instansi:</strong>UPT. KPH Wilayah Ketapang Selatan <br>
                            <strong>Alamat:</strong>Jl. M. Tohir no 11B Tengah, Kec. Delta Pawan, Kabupaten Ketapang, Kalimantan Barat 78811<br>
                           
                            <strong>Email:</strong> kphketapangselatan@gmail.com<br>
                        </p>

                    </div>
                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4></h4><br>
                        <p>
                            <strong>Instansi:</strong>BAPPEDA Kabupaten Ketapang <br>
                            <strong>Alamat:</strong>Jl..<br>
                            <strong>Phone:</strong> +62 8xxxxxxx<br>
                            <strong>Email:</strong> xx@bappedaketapang.com<br>
                        </p>

                    </div> -->

                </div>
            </div>
        </div>

        <!-- <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                Designed by <a href="">BootstrapMade</a>
            </div>
        </div> -->
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    @yield('IndexJs')

    @include('WebGIS.Layouts.Script')

    @yield('ScriptGrafik')


</body>

</html>