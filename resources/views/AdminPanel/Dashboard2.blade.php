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
        <a href="#" class="nav-link">Dashboard</a>
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
    <section class="content">
        <div class="container-fluid">
            <div class="row" hidden>
                <div class="col-md-4">
                    <!-- PIE CHART -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Grafik Kondisi Mantap dan Tidak Mantap</h3>
                            <!-- <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div> -->
                        </div>
                        <div class="card-body">
                            <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col (LEFT) -->
                <div class="col-md-4">
                    <!-- BAR CHART -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Panjang Tiap Kondisi Jalan</h3>
                            <!-- <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div> -->
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col (RIGHT) -->
                <div class="col-md-4">

                    <!-- STACKED BAR CHART -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Panjang Tiap Jenis Permukaan</h3>
                            <!-- <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div> -->
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="stackedBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection

@section('scriptGrafik')
<!-- Grafik  -->
<!-- jQuery -->
<!-- <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script> -->
<!-- Bootstrap 4 -->
<!-- <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script> -->
<!-- ChartJS -->
<!-- <script src="{{ asset('adminlte/plugins/chart.js/Chart.min.js') }}"></script> -->
<!-- AdminLTE App -->
<!-- <script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="{{ asset('adminlte/dist/js/demo.js') }}"></script> -->
<!-- Page specific script -->
<script>
    $(function() {
        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */

        //-------------
        //- DONUT CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.

        // varibale global
        var ok1 = "{{$tes1}}";
        var ok2 = "{{$tes2}}";
        var ok3 = "{{$tes3}}";
        var donutChartCanvas = $('#pieChart').get(0).getContext('2d')
        var donutData = {
            labels: [
                'Mantap (KM)',
                'Tidak Mantap (KM)',
            ],
            datasets: [{
                data: [ok1, ok2],
                backgroundColor: ['#00a65a', '#f56954'],
            }]
        }
        var donutOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        new Chart(donutChartCanvas, {
            type: 'pie',
            data: donutData,
            options: donutOptions
        })


        //--------------
        //- BAR CHART -
        //--------------

        // Get context with jQuery - using jQuery's .get() method.
        var areaChartCanvas = $('#barChart').get(0).getContext('2d')

        var areaChartData = {
            labels: ['Baik', 'Sedang', 'Rusak Ringan', 'Rusak Berat'],
            datasets: [{
                    label: 'KM',
                    backgroundColor: 'rgba(60,141,188,0.9)',
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: [220.56, 33.56, 16.08, 15.88]
                },
                {
                    label: '%',
                    backgroundColor: 'rgba(210, 214, 222, 1)',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: [77.1, 11.73, 5.62, 5.55]
                },
            ]
        }

        var areaChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        // This will get the first returned node in the jQuery collection.
        new Chart(areaChartCanvas, {
            type: 'bar',
            data: areaChartData,
            options: areaChartOptions
        })


        //--------------
        //- Stacked CHART -
        //--------------

        // Get context with jQuery - using jQuery's .get() method.
        var areaChartCanvas = $('#stackedBarChart').get(0).getContext('2d')

        var areaChartData = {
            labels: ['Aspal', 'Beton', 'Kerikil', 'Tanah'],
            datasets: [{
                label: 'Persen (%)',
                backgroundColor: 'rgba(60,141,188,0.9)',
                borderColor: 'rgba(60,141,188,0.8)',
                pointRadius: false,
                pointColor: '#3b8bba',
                pointStrokeColor: 'rgba(60,141,188,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(60,141,188,1)',
                data: [217.717, 56.635, 8.34, 3.385]
            }, ]
        }

        var areaChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        // This will get the first returned node in the jQuery collection.
        new Chart(areaChartCanvas, {
            type: 'bar',
            data: areaChartData,
            options: areaChartOptions
        })

    })
</script>
<!-- End grafik  -->
@endsection