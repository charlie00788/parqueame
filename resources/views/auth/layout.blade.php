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
            <img src="{{ asset('imagenes/armabol.png') }}" alt="" width="100%">
        </div>
        <div class="col-md-8">
            <h2 class="font-bold" align="center">
                Sistema de Certificaciones del Departamento VI "Enseñanzas, Institutos Navales y Doctrina"
            </h2>
        </div>
        <div class="col-md-2">
            <img src="{{ asset('imagenes/dpto.png') }}" alt="" width="100%">
        </div>
    </div>
    <div class="row">

        <div class="col-md-6">

            <p align="justify">

            Bienvenidos al Sistema de Certificaciones del Departamento VI "Enseñanza e Institutos Navales",
            donde podrás acceder a las certificaciones y el llenado de las mismas.

        </p>

        <p align="justify">
            El Departamento VI "Enseñanza e Institutos Navales" a desarrollado el Sistema de Certificaciones
            donde se realizará el respectivo llenado y certificación de Cursos, Especializaciones
            y otros.
        </p>

        <p align="justify">
            <small>Para poder ingresar al Sistema deberá registrarse en el Dpto. VI "Enseñanzas, Institutos Navales y Doctrina"
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
            Desarrollado por TF. CGON. Charlie Seoane Sanchez
        </div>
        <div class="col-md-4 text-right">
            <small>Copyright © 2016</small>
        </div>
    </div>
</div>

</body>

</html>
