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
                            <h2>Datos del Parqueo</h2>
                        </div>
                        <div class="ibox-content">
                            <div class="form-horizontal">

                                @include('partials.errors')

                                {!! Form::open(['route' => 'owner.postAddParking', 'method' => 'POST']) !!}
                                {!! Form::hidden('owner_id', $owner_id) !!}

                                <div class="form-group">
                                    {!! Form::label('location', 'Ubicación:', ['class' => 'col-lg-3 control-label']) !!}
                                    <div class="col-lg-9">
                                        <p class="form-control-static">
                                            {!! Form::text('location', old('location')) !!}
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('latitude', 'Latitud:', ['class' => 'col-lg-3 control-label']) !!}
                                    <div class="col-lg-9">
                                        <p class="form-control-static">
                                            {!! Form::text('latitude', old('latitude')) !!}
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('longitude', 'Longitud:', ['class' => 'col-lg-3 control-label']) !!}
                                    <div class="col-lg-9">
                                        <p class="form-control-static">
                                            {!! Form::text('longitude', old('longitude')) !!}
                                        </p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-3">
                                        {!! Form::submit('Guardar Parqueo', ['class' => 'btn btn-block btn-primary']) !!}
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