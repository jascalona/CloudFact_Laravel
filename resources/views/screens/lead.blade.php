@extends('layouts.structure')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CloudFact-Lead</title>

    <!--STYLES-->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/card.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/table.css') }}">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>


    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <!--STYLES-->

</head>

<body>

    @section('content')

        <main class="main-content position-relative">
            <!-- Navbar -->
            <nav class="navbar navbar-main navbar-expand-lg px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur"
                data-scroll="true">
                <div class="container-fluid py-1 px-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                            <li class="breadcrumb-item text-sm">Pages</li>
                            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Lecturas</li>
                        </ol>
                    </nav>

                    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">

                        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                            <div class="input-group input-group-outline">
                                <label class="form-label">Type here...</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>


                        <button type="button" class="btn btn-dark position-relative" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            <i class='bx bxs-bell-ring'></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                99+
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </button>

                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

            <div class="container-fluid py-2">
                <div class="row">
                    <div class="ms-3">
                        <h3 class="mb-0 h4 font-weight-bolder">Bienvenid@ {{ Auth::user()->name }}</h3>
                        <p class="mb-4">
                            Monitorea metricas clave. Consulta Informes y analiza la informacion
                        </p>
                    </div>

                    <!--CARDS-->
                    <!--EStadisticas-->
                    <div class="main-content">
                        <div class="header pb-8 pt-5 pt-md-8">
                            <div class="container-fluid">
                                <div class="header-body">
                                    <div class="row">

                                        <div class="col-xl-3 col-lg-6">
                                            <div class="card card-stats mb-4 mb-xl-0">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h5 class="card-title text-uppercase text-muted mb-0">Ventas
                                                            </h5>
                                                            <span class="h2 font-weight-bold mb-0">350,897</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div
                                                                class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                                                <i class='bx bx-line-chart'></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="mt-3 mb-0 text-muted text-sm">
                                                        <span class="text-success mr-2"><i
                                                                class="fa fa-arrow-up"></i></span>
                                                        <span class="text-nowrap">Ventas realizadas</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-6">
                                            <div class="card card-stats mb-4 mb-xl-0">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h5 class="card-title text-uppercase text-muted mb-0">SGD</h5>
                                                            <span class="h2 font-weight-bold mb-0">350</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div
                                                                class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                                                <i class='bx bxs-group'></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="mt-3 mb-0 text-muted text-sm">
                                                        <span class="text-danger mr-2"><i
                                                                class="fas fa-arrow-down"></i></span>
                                                        <span class="text-nowrap">Contrato SGD</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-6">
                                            <div class="card card-stats mb-4 mb-xl-0">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h5 class="card-title text-uppercase text-muted mb-0">Equipos
                                                            </h5>
                                                            <span class="h2 font-weight-bold mb-0">924</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div
                                                                class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                                                <i class='bx bxs-printer'></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="mt-3 mb-0 text-muted text-sm">
                                                        <span class="text-warning mr-2"><i
                                                                class="fas fa-arrow-down"></i></span>
                                                        <span class="text-nowrap">Equipos en cliente</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-6">
                                            <div class="card card-stats mb-4 mb-xl-0">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h5 class="card-title text-uppercase text-muted mb-0">
                                                                Inventario</h5>
                                                            <span class="h2 font-weight-bold mb-0">49,6%</span>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div
                                                                class="icon icon-shape bg-info text-white rounded-circle shadow">
                                                                <i class='bx bxs-package'></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="mt-3 mb-0 text-muted text-sm">
                                                        <span class="text-success mr-2"><i
                                                                class="fas fa-arrow-up"></i></span>
                                                        <span class="text-nowrap">Equipos disponibles</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page content -->
                    </div>
                    <!--EStadisticas-->

                    <!--CARDS-->
                </div>


              

            </div>


            <footer class="footer py-4  ">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 mb-lg-0 mb-4">
                            <div class="copyright text-center text-sm text-muted text-lg-start">
                                © 2010-2025. CloudFact <i class="fa fa-heart"></i> by
                                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Xerox de
                                    Venezuela</a>
                            </div>
                        </div>

                    </div>
                </div>
            </footer>
        </main>

    @endsection

</body>

</html>