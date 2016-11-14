@extends('layout')

@section('title')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Parquéame</h2>
        </div>
    </div>

@endsection

@section('content')

    <div class="wrapper wrapper-content">

        @include('partials.errors')
        {!!  Alert::render() !!}

        <div class="row">
            <div class="col-lg-12 animated fadeInRight">
                <div class="ibox-content">
                    <a class="btn btn-primary" href="{{ route('owner.getAddParking', $owner_id) }}">
                        Agregar Parqueo
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-0 animated fadeInRight">
            </div>
            <div class="col-lg-12 animated fadeInRight">
                <div class="ibox-content" style="display: block">
                    <table class="table table-hover" width="100%">
                        <thead>
                        <tr>
                            <th>Ubicación</th>
                            <th>Latitud</th>
                            <th>Longitud</th>
                            <th>Estado</th>
                            <th style="text-align: center" colspan="2">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($parkings as $parking)
                            <tr>
                                <td>{{ $parking->location }}</td>
                                <td>{{ $parking->latitude }}</td>
                                <td>{{ $parking->longitude }}</td>
                                <td>{{ $parking->estado }}</td>
                                @if($parking->propietario->type == 'private')
                                    <td style="text-align: center"><a href="{{ route('owner.getChangeState', $parking->id) }}" class="btn btn-xs btn-success">Cambiar Estado</a></td>
                                    <td style="text-align: center"><a href="{{ route('owner.getDeleteParking', ['parking_id' => $parking->id, 'owner_id' => $owner_id]) }}" class="btn btn-xs btn-danger">Eliminar</a></td>
                                @else
                                    <td style="text-align: center" colspan="2"><a href="{{ route('owner.getDeleteParking', ['parking_id' => $parking->id, 'owner_id' => $owner_id]) }}" class="btn btn-xs btn-danger">Eliminar</a></td>
                                @endif

                            <tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection