@extends('layout')

@section('title')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-12">
            <h2>Parqueo Privado</h2>
        </div>
    </div>

@endsection

@section('content')
    <div class="wrapper wrapper-content">

        @include('partials.errors')
        {!! Alert::render() !!}

        <div class="row">
            <div class="col-lg-0 animated fadeInRight">
            </div>
            <div class="col-lg-12 animated fadeInRight">
                <div class="ibox-content" style="display: block">
                    <table class="table table-hover" width="100%">
                        <thead>
                        <tr>
                            <th>Nombre del Parqueo</th>
                            <th>Tipo</th>
                            <th>Dirección</th>
                            <th>Estado</th>
                            <th style="text-align: center">Opción</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $parqueo->propietario->name }}</td>
                                <td>Parqueo Privado</td>
                                <td>{{ $parqueo->propietario->location }}</td>
                                @if($parqueo->state == true)
                                    <td>Disponible</td>
                                    <td style="text-align: center"><a href="{{ route('getUpdatePrivate', [$parqueo->id, 0]) }}" class="btn btn-xs btn-danger">Deshabilitar</a></td>
                                @else
                                    <td>Ocupado</td>
                                    <td style="text-align: center"><a href="{{ route('getUpdatePrivate', [$parqueo->id, 1]) }}" class="btn btn-xs btn-primary">Habilitar</a></td>
                                @endif
                            <tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection