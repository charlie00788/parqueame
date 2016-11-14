@extends('layout')

@section('title')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-12">
            <h2>Parquéame</h2>
        </div>
    </div>

@endsection

@section('content')
    <div class="wrapper wrapper-content">
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-12 animated fadeInRight">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h2>Datos del Usuario</h2>
                        </div>
                        <div class="ibox-content">
                            <div class="form-horizontal">

                                @include('partials.errors')

                                {!! Form::open(['route' => 'admin.postAddUser', 'method' => 'POST']) !!}

                                <div class="form-group">
                                    {!! Form::label('nickname', 'Usuario:', ['class' => 'col-lg-3 control-label']) !!}
                                    <div class="col-lg-9">
                                        <p class="form-control-static">
                                            {!! Form::text('nickname', old('nickname')) !!}
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('name', 'Nombre:', ['class' => 'col-lg-3 control-label']) !!}
                                    <div class="col-lg-9">
                                        <p class="form-control-static">
                                            {!! Form::text('name', old('name')) !!}
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('email', 'Correo electrónico:', ['class' => 'col-lg-3 control-label']) !!}
                                    <div class="col-lg-9">
                                        <p class="form-control-static">
                                            {!! Form::email('email', old('email')) !!}
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('role', 'Rol:', ['class' => 'col-lg-3 control-label']) !!}
                                    <div class="col-lg-9">
                                        <p class="form-control-static">
                                            {!! Form::select('role', [
                                                'admin' => 'Administrador',
                                                'owner' => 'Propietario'
                                            ]) !!}
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-3">
                                        {!! Form::submit('Guardar Usuario', ['class' => 'btn btn-block btn-primary']) !!}
                                    </div>
                                </div>

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection