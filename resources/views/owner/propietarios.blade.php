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
                    <a class="btn btn-primary" href="{{ route('owner.getAddOwner') }}">
                        Agregar Propietario
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
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th style="text-align: center" colspan="2">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($owners as $owner)
                            <tr>
                                <td>{{ $owner->name }}</td>
                                <td>{{ $owner->tipo }}</td>
                                <td style="text-align: center"><a href="{{ route('owner.getParkings', $owner->id) }}" class="btn btn-xs btn-success">Ingresar</a></td>
                                <td style="text-align: center"><a href="{{ route('owner.getDeleteOwner', $owner->id) }}" class="btn btn-xs btn-danger">Eliminar</a></td>
                            <tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection