    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Database Bangunan Gedung PUPR Pontianak</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/peta-pontianak/logo-pontianak.jpg') }}" rel="icon">
    <link href="{{ asset('assets/img/peta-pontianak/logo-aid1.jpg') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('assetsAdmin/vendor/simple-datatables/style.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet')">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">


    <!-- start datatables -->
    <!-- Vendor CSS Files -->
    <!-- <link href="{{ asset('assetsAdmin/vendor/simple-datatables/style.css') }}" rel="stylesheet"> -->
    <!-- end datatables  -->

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">


    <!-- datatable adminlte -->
    <!-- DataTables -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{asset ('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{asset ('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{asset ('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- Theme style -->
    <!-- <link rel="stylesheet" href="{{asset ('adminlte/dist/css/adminlte.min.css') }}"> -->
    <!-- end datatable adminlte  -->
    <!-- peta  -->

    <!-- grafik  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js">
    </script>
    <script>
        // this script is written by yazzz https://stackoverflow.com/a/35819751/9894532
        $(function() {
            $("#wrapper").each(function() {
                var $wrap = $(this);

                function iframeScaler() {
                    var wrapWidth = $wrap.width(); // width of the wrapper
                    var wrapHeight = $wrap.height();
                    var childWidth = $wrap.children("iframe").width(); // width of child iframe
                    var childHeight = $wrap.children("iframe").height(); // child height
                    var wScale = wrapWidth / childWidth;
                    var hScale = wrapHeight / childHeight;
                    var scale = Math.min(wScale, hScale); // get the lowest ratio
                    $wrap.children("iframe").css({
                        "transform": "scale(" + scale + ")",
                        "transform-origin": "left top"
                    }); // set scale
                };
                $(window).on("resize", iframeScaler);
                $(document).ready(iframeScaler);
            });
        });
    </script>
    <!-- end grafik  -->


    <!-- chart adminlte -->
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <!-- <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}"> -->
    <!-- end chart adminlte -->