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
            </div>
    @endsection



</body>
</html>