@extends('layout')

@section('title')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Parquéame</h2>
        </div>
    </div>

@endsection

@section('content')

    @include('partials.errors')

    {{--<div class="row">--}}
        {{--<div class="col-lg-12">--}}
            {{--<div class="wrapper wrapper-content animated fadeInRight">--}}

                {{--<div class="ibox-content m-b-sm border-bottom">--}}
                    {{--<div class="text-center p-lg">--}}
                        {{--<h2>Administrador del Sistema de Certificaciones</h2>--}}
                        {{--<span>Haga click en la pregunta para mostrar</span>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="faq-item">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-12">--}}
                            {{--<a data-toggle="collapse" href="#faq1" class="faq-question">Para qué sirve el Sistema de Certificaciones?</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-lg-12">--}}
                            {{--<div id="faq1" class="panel-collapse collapse ">--}}
                                {{--<div class="faq-answer">--}}
                                    {{--<p>--}}
                                        {{--El Sistema de Certificaciones del Departamento VI "Educación, Enseñanzas e Institutos Navales"--}}
                                        {{--sirve para el registro de las notas de los diferentes Institutos de Formación y Especialización--}}
                                        {{--de la Armada Boliviana.--}}
                                    {{--</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="faq-item">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-12">--}}
                            {{--<a data-toggle="collapse" href="#faq2" class="faq-question">Cuál es la función del Administrador del Sistema?</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-lg-12">--}}
                            {{--<div id="faq2" class="panel-collapse collapse ">--}}
                                {{--<div class="faq-answer">--}}
                                    {{--<p>--}}
                                        {{--El Administrador del Sistema es encargado del registro y asignación de usuarios que usarán--}}
                                        {{--el Sistema, asi como de la creación de los diferentes Institutos de Formación y Especializacion--}}
                                        {{--de la Armada Boliviana.--}}
                                    {{--</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="faq-item">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-12">--}}
                            {{--<a data-toggle="collapse" href="#faq3" class="faq-question">Para qué sirve el menú Unidades?</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-lg-12">--}}
                            {{--<div id="faq3" class="panel-collapse collapse ">--}}
                                {{--<div class="faq-answer">--}}
                                    {{--<p>--}}
                                        {{--Sirve para agregar, modificar o eliminar los diferentes Institutos de Formación y Especialización--}}
                                        {{--de la Armada Boliviana, asi como también la administración de los usuarios que tienen--}}
                                        {{--acceso a esas Unidades.--}}
                                    {{--</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="faq-item">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-12">--}}
                            {{--<a data-toggle="collapse" href="#faq4" class="faq-question">Para qué sirve el menú Usuarios?</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-lg-12">--}}
                            {{--<div id="faq4" class="panel-collapse collapse ">--}}
                                {{--<div class="faq-answer">--}}
                                    {{--<p>--}}
                                        {{--Sirve para agregar, modificar o eliminar los diferentes Usuarios que tienen acceso al--}}
                                        {{--Sistema de Certificaciones.--}}
                                    {{--</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="faq-item">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-12">--}}
                            {{--<a data-toggle="collapse" href="#faq5" class="faq-question">Para qué sirve el menú Cargos?</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-lg-12">--}}
                            {{--<div id="faq5" class="panel-collapse collapse ">--}}
                                {{--<div class="faq-answer">--}}
                                    {{--<p>--}}
                                        {{--Por el momento para ver quienes tienen los diferentes cargos en el--}}
                                        {{--Departamento VI "Educación, Enseñanzas e Institutos Navales".--}}
                                        {{--En una futura actualización el usuario podrá realizar los cambios--}}
                                        {{--respectivos cuando exista un cambio de destino o cuando lo vea--}}
                                        {{--conveniente.--}}
                                    {{--</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

@endsection