@extends('layouts.structure')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CloudFact-Dashboard</title>

    <!--STYLES-->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/card.css') }}">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!--STYLES-->

</head>

<body>

    @section('content')
        <div class="main p-5">
            <div class="text-satrt">
                <h2 id="navbarDropdown" class="" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ 'Bienvenid@' . ' ' . Auth::user()->name  }}
                </h2>
                <small>
                    Monitorea metricas clave. Consulta Informes y analiza la informacion
                </small>
            </div>

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
                                                    <h5 class="card-title text-uppercase text-muted mb-0">Ventas</h5>
                                                    <span class="h2 font-weight-bold mb-0">350,897</span>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                                        <i class='bx bx-line-chart'></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mt-3 mb-0 text-muted text-sm">
                                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i></span>
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
                                                <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i></span>
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
                                                    <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                                        <i class='bx bxs-printer'></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mt-3 mb-0 text-muted text-sm">
                                                <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i></span>
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
                                                    <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                                        <i class='bx bxs-package'></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mt-3 mb-0 text-muted text-sm">
                                                <span class="text-success mr-2"><i class="fas fa-arrow-up"></i></span>
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



        </div>


    @endsection



</body>

</html>