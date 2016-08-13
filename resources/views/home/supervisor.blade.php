@extends('layout')

@section('title')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-12">
            <h2>{{ $usuario->unity->unity }}</h2>
        </div>
    </div>

@endsection

@section('content')

    @include('partials.errors')

    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content animated fadeInRight">

                <div class="ibox-content m-b-sm border-bottom">
                    <div class="text-center p-lg">
                        <h2>Encargado de Certificaciones del Sistema</h2>
                        <span>Haga click en la pregunta para mostrar</span>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="row">
                        <div class="col-md-12">
                            <a data-toggle="collapse" href="#faq1" class="faq-question">Para qué sirve el Sistema de Certificaciones?</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="faq1" class="panel-collapse collapse ">
                                <div class="faq-answer">
                                    <p>
                                        El Sistema de Certificaciones del Departamento VI "Educación, Enseñanzas e Institutos Navales"
                                        sirve para el registro de las notas de los diferentes Institutos de Formación y Especialización
                                        de la Armada Boliviana.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="row">
                        <div class="col-md-12">
                            <a data-toggle="collapse" href="#faq2" class="faq-question">Cuál es la función del Encargado de Certificaciones del Sistema?</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="faq2" class="panel-collapse collapse ">
                                <div class="faq-answer">
                                    <p>
                                        El Encargado de Certificaciones podrá emitir los diferentes certificados emitidos
                                        por el Departamento VI, como ser certificaciones de no haber sido separado de un
                                        Instituto de Formación, asi como no haber sido dado de baja de algun curso de
                                        especialización de la Armada.
                                        <br>Podrá emitir los certificados de egreso de los diferentes Institutos de Especialización
                                        de la Armada Boliviana a los interesados.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="row">
                        <div class="col-md-12">
                            <a data-toggle="collapse" href="#faq3" class="faq-question">Para qué sirve el menú Unidades?</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="faq3" class="panel-collapse collapse ">
                                <div class="faq-answer">
                                    <p>
                                        Sirve para ingresar a los diferentes Institutos de formación y especialización de la Armada
                                        Boliviana.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="row">
                        <div class="col-md-12">
                            <a data-toggle="collapse" href="#faq4" class="faq-question">Para qué sirve el menú Certificaciones?</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="faq4" class="panel-collapse collapse ">
                                <div class="faq-answer">
                                    <p>
                                        Sirve para emitir los diferentes certificados que otorga los Institutos de Especialización
                                        asi como también la emisión del Certificado de no haber sido dado de baja
                                        de algun Instituto de Formación.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="row">
                        <div class="col-md-12">
                            <a data-toggle="collapse" href="#faq5" class="faq-question">Para qué sirve el submenú Aspirantes?</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="faq5" class="panel-collapse collapse ">
                                <div class="faq-answer">
                                    <p>
                                        Para la emisión de los Certificados de no haber sido dado de baja de los diferentes
                                        Institutos de Formación.
                                        <br>La búsqueda puede ser realizada por el número del carnet de identidad así como
                                        la búsqueda por apellidos paterno y materno.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="row">
                        <div class="col-md-12">
                            <a data-toggle="collapse" href="#faq6" class="faq-question">Para qué sirve el submenú Egresados?</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="faq6" class="panel-collapse collapse ">
                                <div class="faq-answer">
                                    <p>
                                        Para la emisión de los Certificados de egreso de los diferentes Institutos de
                                        Especialización de la Armada Boliviana.
                                        <br>La búsqueda puede ser realizada por el número del carnet de identidad
                                        únicamente.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection