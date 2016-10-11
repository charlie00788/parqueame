<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inicio de Sesión</title>

    {!! Html::style('css/bootstrap.css') !!}
    {!! Html::style('font-awesome/css/font-awesome.css') !!}
    {!! Html::style('css/animate.css') !!}
    {!! Html::style('fuentespropias/open-sans.css') !!}
    {!! Html::style('css/style.min.css') !!}
    {!! Html::style('css/mystyles.css') !!}

</head>

<body class="gray-bg">

<div class="loginColumns animated fadeInDown">

    <div class="row">
        <div class="col-md-2">
            {{--<img src="{{ asset('imagenes/armabol.png') }}" alt="" width="100%">--}}
        </div>
        <div class="col-md-8">
            <h2 class="font-bold" align="center">
                Sistema de Búsquda de Parqueos "Parquéame"
            </h2>
        </div>
        <div class="col-md-2">
            {{--<img src="{{ asset('imagenes/dpto.png') }}" alt="" width="100%">--}}
        </div>
    </div>
    <div class="row">

        <div class="col-md-6">

            <p align="justify">

            Bienvenidos al Sistema de Búsquedas de Parqueos donde podrá encontrar un parqueo disponible
                cerca de su actual localizacion.
        </p>

        <p align="justify">
            El G.A.M.L.P. en busca del bienestar de la población brinda el servicio de busqeda de
            parqueos para proporcionarle un espacio para su movilidad.
        </p>

        <p align="justify">
            <small>Para poder ingresar al Sistema deberá registrarse en el G.A.M.L.P.
            donde se le asignará un usuario y contraseña, todo ingreso a la plataforma
                estará registrado en el sistema.</small>
        </p>

        </div>
        <div class="col-md-6">

            @include('partials.errors')

            @yield('content')

        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-8">
            Desarrollado por Charlie Seoane Sanchez y Fabricio Torrico Barahona
        </div>
        <div class="col-md-4 text-right">
            <small>Copyright © 2016</small>
        </div>
    </div>
</div>

</body>

</html>
