<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Target Material Design Bootstrap Admin Template</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/materialize/css/materialize.min.css') }}" media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="{{ asset('assets/js/morris/morris-0.4.3.min.css') }}" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{ asset('assets/css/custom-styles.css') }}" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{ asset('assets/js/Lightweight-Chart/cssCharts.css') }}">
</head>

<body>
<div id="wrapper">
    @include('partials.admin_header')
    <ul id="dropdown3" class="dropdown-content dropdown-tasks w250">
        <li>
            <a href="#">
                <div>
                    <p>
                        <strong>Task 1</strong>
                        <span class="pull-right text-muted">60% Complete</span>
                    </p>
                    <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                            <span class="sr-only">60% Complete (success)</span>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="#">
                <div>
                    <p>
                        <strong>Task 2</strong>
                        <span class="pull-right text-muted">28% Complete</span>
                    </p>
                    <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%">
                            <span class="sr-only">28% Complete</span>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="#">
                <div>
                    <p>
                        <strong>Task 3</strong>
                        <span class="pull-right text-muted">60% Complete</span>
                    </p>
                    <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                            <span class="sr-only">60% Complete (warning)</span>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="#">
                <div>
                    <p>
                        <strong>Task 4</strong>
                        <span class="pull-right text-muted">85% Complete</span>
                    </p>
                    <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                            <span class="sr-only">85% Complete (danger)</span>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <li class="divider"></li>
        <li>
    </ul>
    <ul id="dropdown4" class="dropdown-content dropdown-tasks w250 taskList">
        <li>
            <div>
                <strong>John Doe</strong>
                <span class="pull-right text-muted">
                                        <em>Today</em>
                                    </span>
            </div>
            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <div>
                <strong>John Smith</strong>
                <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
            </div>
            <p>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</p>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="#">
                <div>
                    <strong>John Smith</strong>
                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                </div>
                <p>Lorem Ipsum has been the industry's standard dummy text ever since the...</p>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a class="text-center" href="#">
                <strong>Read All Messages</strong>
                <i class="fa fa-angle-right"></i>
            </a>
        </li>
    </ul>
    <!--/. NAV TOP  -->
    @include('partials.admin_side_nav')
    <!-- /. NAV SIDE  -->

    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                Dashboard
            </h1>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Dashboard</a></li>
                <li class="active">Data</li>
            </ol>

        </div>
        <div id="page-inner">

            <div class="dashboard-cards">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">

                        <div class="card horizontal cardIcon waves-effect waves-dark">
                            <div class="card-image red">
                                <i class="material-icons dp48">import_export</i>
                            </div>
                            <div class="card-stacked red">
                                <div class="card-content">
                                    <h3>{{ $postCount }}</h3>
                                </div>
                                <div class="card-action">
                                    <strong>POST COUNT</strong>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">

                        <div class="card horizontal cardIcon waves-effect waves-dark">
                            <div class="card-image orange">
                                <i class="material-icons dp48">shopping_cart</i>
                            </div>
                            <div class="card-stacked orange">
                                <div class="card-content">
                                    <h3>36,540</h3>
                                </div>
                                <div class="card-action">
                                    <strong>SALES</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">

                        <div class="card horizontal cardIcon waves-effect waves-dark">
                            <div class="card-image blue">
                                <i class="material-icons dp48">equalizer</i>
                            </div>
                            <div class="card-stacked blue">
                                <div class="card-content">
                                    <h3>24,225</h3>
                                </div>
                                <div class="card-action">
                                    <strong>PRODUCTS</strong>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">

                        <div class="card horizontal cardIcon waves-effect waves-dark">
                            <div class="card-image green">
                                <i class="material-icons dp48">supervisor_account</i>
                            </div>
                            <div class="card-stacked green">
                                <div class="card-content">
                                    <h3>88,658</h3>
                                </div>
                                <div class="card-action">
                                    <strong>VISITS</strong>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /. ROW  -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-7">
                    <div class="cirStats">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="card-panel text-center">
                                    <h4>Profit</h4>
                                    <div class="easypiechart" id="easypiechart-blue" data-percent="82" ><span class="percent">82%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="card-panel text-center">
                                    <h4>No. of Visits</h4>
                                    <div class="easypiechart" id="easypiechart-red" data-percent="46" ><span class="percent">46%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="card-panel text-center">
                                    <h4>Customers</h4>
                                    <div class="easypiechart" id="easypiechart-teal" data-percent="84" ><span class="percent">84%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="card-panel text-center">
                                    <h4>Sales</h4>
                                    <div class="easypiechart" id="easypiechart-orange" data-percent="55" ><span class="percent">55%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.row-->
                <div class="col-xs-12 col-sm-12 col-md-5">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-image donutpad">
                                    <div id="morris-donut-chart"></div>
                                </div>
                                <div class="card-action">
                                    <b>Donut Chart Example</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.row-->
            </div>


            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-image">
                            <div id="morris-line-chart"></div>
                        </div>
                        <div class="card-action">
                            <b>Line Chart</b>
                        </div>
                    </div>

                </div>

                <div class="col-md-7">
                    <div class="card">
                        <div class="card-image">
                            <div id="morris-bar-chart"></div>
                        </div>
                        <div class="card-action">
                            <b> Bar Chart Example</b>
                        </div>
                    </div>
                </div>

            </div>



            <div class="row">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="card-image">
                            <div id="morris-area-chart"></div>
                        </div>
                        <div class="card-action">
                            <b>Area Chart</b>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
            <!-- /. ROW  -->





            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="card"><div class="card-action">
                            <b>Tasks Panel</b>
                        </div>
                        <div class="card-image">
                            <div class="collection">
                                <a href="#!" class="collection-item">Red<span class="new badge red" data-badge-caption="red">4</span></a>
                                <a href="#!" class="collection-item">Blue<span class="new badge blue" data-badge-caption="blue">4</span></a>
                                <a href="#!" class="collection-item"><span class="badge">1</span>Alan</a>
                                <a href="#!" class="collection-item"><span class="new badge">4</span>Alan</a>
                                <a href="#!" class="collection-item">Alan<span class="new badge blue" data-badge-caption="blue">4</span></a>
                                <a href="#!" class="collection-item"><span class="badge">14</span>Alan</a>
                                <a href="#!" class="collection-item">Custom Badge Captions<span class="new badge" data-badge-caption="custom caption">4</span></a>
                                <a href="#!" class="collection-item">Custom Badge Captions<span class="badge" data-badge-caption="custom caption">4</span></a>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="card-action">
                            <b>User List</b>
                        </div>
                        <div class="card-image">
                            <ul class="collection">
                                <li class="collection-item avatar">
                                    <i class="material-icons circle green">track_changes</i>
                                    <span class="title">Title</span>
                                    <p>First Line <br>
                                        Second Line
                                    </p>
                                    <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                                </li>
                                <li class="collection-item avatar">
                                    <i class="material-icons circle">folder</i>
                                    <span class="title">Title</span>
                                    <p>First Line <br>
                                        Second Line
                                    </p>
                                    <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                                </li>
                                <li class="collection-item avatar">
                                    <i class="material-icons circle green">track_changes</i>
                                    <span class="title">Title</span>
                                    <p>First Line <br>
                                        Second Line
                                    </p>
                                    <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                                </li>
                                <li class="collection-item avatar">
                                    <i class="material-icons circle red">play_arrow</i>
                                    <span class="title">Title</span>
                                    <p>First Line <br>
                                        Second Line
                                    </p>
                                    <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                                </li>
                            </ul>
                        </div>
                    </div>



                </div>
            </div>
            <!-- /. ROW  -->
            <div class="fixed-action-btn horizontal click-to-toggle">
                <a class="btn-floating btn-large red">
                    <i class="material-icons">menu</i>
                </a>
                <ul>
                    <li><a class="btn-floating red"><i class="material-icons">track_changes</i></a></li>
                    <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
                    <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
                    <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
                </ul>
            </div>

            <footer><p>All right reserved. Template by: <a href="https://webthemez.com/admin-template/">WebThemez.com</a></p>


            </footer>
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<!-- JS Scripts-->
<!-- jQuery Js -->
<script src="{{ asset('assets/js/jquery-1.10.2.js') }}"></script>

<!-- Bootstrap Js -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('assets/materialize/js/materialize.min.js') }}"></script>

<!-- Metis Menu Js -->
<script src="{{ asset('assets/js/jquery.metisMenu.js') }}"></script>
<!-- Morris Chart Js -->
<script src="{{ asset('assets/js/morris/raphael-2.1.0.min.js') }}"></script>
<script src="{{ asset('assets/js/morris/morris.js') }}"></script>


<script src="{{ asset('assets/js/easypiechart.js') }}"></script>
<script src="{{ asset('assets/js/easypiechart-data.js') }}"></script>

<script src="{{ asset('assets/js/Lightweight-Chart/jquery.chart.js') }}"></script>

<!-- Custom Js -->
<script src="{{ asset('assets/js/custom-scripts.js') }}"></script>


</body>

</html>
