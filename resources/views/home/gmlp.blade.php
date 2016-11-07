@extends('layout2')

@section('title')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-12">
            <h2>G.A.M.L.P.</h2>
        </div>
    </div>

@endsection

@section('content')
    <div class="wrapper wrapper-content">

        @include('partials.errors')
        {!! Alert::render() !!}

        <div class="ibox">
            <div class="ibox-title">
                <h2>Datos del Parqueo</h2>
            </div>
            <div class="ibox-content">
                <div class="form-horizontal">
                    {{--<div class="form-group">--}}
                        {{--{!! Form::label('person_id', 'Nombre del Parqueo:', ['class' => 'col-lg-3 control-label']) !!}--}}
                        {{--<div class="col-lg-9">--}}
                            {{--<p class="form-control-static">--}}
                                {{--{!! Form::text('person_id') !!}--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="form-group">
                        {!! Form::label('city_id', 'Ubicación:', ['class' => 'col-lg-3 control-label']) !!}
                        <div class="col-lg-9">
                            <p class="form-control-static">
                                {!! Form::text('city_id') !!}
                            </p>
                        </div>
                    </div>
                    {{--<div class="form-group">--}}
                        {{--{!! Form::label('grade_id', 'Grado:', ['class' => 'col-lg-3 control-label']) !!}--}}
                        {{--<div class="col-lg-9">--}}
                            {{--<p class="form-control-static">--}}
                                {{--{!! Form::select('grade_id', $grados) !!}--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--{!! Form::label('specialty_id', 'Especialidad:', ['class' => 'col-lg-3 control-label']) !!}--}}
                        {{--<div class="col-lg-9">--}}
                            {{--<p class="form-control-static">--}}
                                {{--{!! Form::select('specialty_id', $especialidad) !!}--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--{!! Form::label('fLastName', 'Apellido paterno:', ['class' => 'col-lg-3 control-label']) !!}--}}
                        {{--<div class="col-lg-9">--}}
                            {{--<p class="form-control-static">--}}
                                {{--{!! Form::text('fLastName', $evaluado->fLastName) !!}--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--{!! Form::label('sLastName', 'Apellido materno:', ['class' => 'col-lg-3 control-label']) !!}--}}
                        {{--<div class="col-lg-9">--}}
                            {{--<p class="form-control-static">--}}
                                {{--{!! Form::text('sLastName', $evaluado->sLastName) !!}--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--{!! Form::label('name', 'Nombres:', ['class' => 'col-lg-3 control-label']) !!}--}}
                        {{--<div class="col-lg-9">--}}
                            {{--<p class="form-control-static">--}}
                                {{--{!! Form::text('name', $evaluado->name) !!}--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--{!! Form::label('gender', 'Género:', ['class' => 'col-lg-3 control-label']) !!}--}}
                        {{--<div class="col-lg-9">--}}
                            {{--<p class="form-control-static">--}}
                                {{--{!! Form::select('gender', ['male' => 'Masculino', 'female' => 'Femenino'], $evaluado->gender) !!}--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--{!! Form::label('tin', 'TIN:', ['class' => 'col-lg-3 control-label']) !!}--}}
                        {{--<div class="col-lg-9">--}}
                            {{--<p class="form-control-static">--}}
                                {{--{!! Form::text('tin', $evaluado->tin) !!}--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--{!! Form::label('promocion', 'Año de promoción:', ['class' => 'col-lg-3 control-label']) !!}--}}
                        {{--<div class="col-lg-9">--}}
                            {{--<p class="form-control-static">--}}
                                {{--{!! Form::text('promocion', $evaluado->promocion, ['data-mask' => '9999']) !!}--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--{!! Form::label('birthday', 'Fecha de nacimiento:', ['class' => 'col-lg-3 control-label']) !!}--}}
                        {{--<div class="col-lg-9">--}}
                            {{--<p class="form-control-static">--}}
                                {{--{!! Form::date('birthday', $evaluado->birthday) !!}--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--{!! Form::label('unity_id', 'Unidad:', ['class' => 'col-lg-3 control-label']) !!}--}}
                        {{--<div class="col-lg-9">--}}
                            {{--<p class="form-control-static">--}}
                                {{--{!! Form::select('unity_id', $unidad, $evaluado->unity_id) !!}--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--{!! Form::label('position', 'Cargo:', ['class' => 'col-lg-3 control-label']) !!}--}}
                        {{--<div class="col-lg-9">--}}
                            {{--<p class="form-control-static">--}}
                                {{--{!! Form::text('position', old('position')) !!}--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="form-group">
                        {!! Form::label('place', 'Lugar (Ciudad):', ['class' => 'col-lg-3 control-label']) !!}
                        <div class="col-lg-9">
                            <p class="form-control-static">
                                {!! Form::text('place', old('place')) !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection