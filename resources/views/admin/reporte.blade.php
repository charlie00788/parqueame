@extends('layout')

@section('title')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Reportes</h2>
        </div>
    </div>

@endsection

@section('content')

    <div class="wrapper wrapper-content">

        @include('partials.errors')
        {!!  Alert::render() !!}

        <div class="row">
            <div class="col-lg-0 animated fadeInRight">
            </div>
            <div class="col-lg-12 animated fadeInRight">
                <div class="ibox-content" style="display: block">
                    <table class="table table-hover" width="100%">
                        <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Nombre</th>
                            <th>Rol</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->nickname }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->rol }}</td>
                            <tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection