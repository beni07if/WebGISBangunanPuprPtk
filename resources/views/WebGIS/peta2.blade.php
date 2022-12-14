@extends('WebGIS.Layouts.AppPeta')

@section('header')
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{ route('index') }}" class="logo d-flex align-items-center">
            <img src="assets/img/logo/logo-web-bangunan3.png" alt="">
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
</header><!-- End Header -->
@endsection

@section('content')
<br><br><br>

<main id="main">

    <style>
        .embed-container {
            position: relative;
            padding-bottom: 50%;
            height: 0;
            max-width: 100%;
        }

        .embed-container iframe,
        .embed-container object,
        .embed-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        small {
            position: absolute;
            z-index: 40;
            bottom: 0;
            margin-bottom: -15px;
        }
    </style>
    <div class="embed-container"><iframe width="800" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="WebGIS Bangunan" src="//www.arcgis.com/apps/Embed/index.html?webmap=8c997ffca17e4a1cb72caa6d53acca65&extent=109.0885,-0.1748,109.5901,0.0958&home=true&zoom=true&previewImage=false&scale=true&search=true&searchextent=true&details=true&legend=true&active_panel=legend&basemap_gallery=true&disable_scroll=false&theme=light"></iframe></div>

    <!-- <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1aIemFq2ONA3cUjGuypuXHQABdTWMIxE&usp=sharing" width="100%" height="880"></iframe> -->
    <!-- <iframe src="https://maps.arcgis.com/apps/mapviewer/index.html?webmap=de97d7b8e92b4cb489cf530554ce03a8" width="100%" height="880"></iframe> -->

</main><!-- End #mains -->
@endsection