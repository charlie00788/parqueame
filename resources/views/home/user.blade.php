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
                        <h2>Usuario del Sistema de Certificaciones</h2>
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
                            <a data-toggle="collapse" href="#faq2" class="faq-question">Cuál es la función del Usuario de Certificaciones del Sistema?</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="faq2" class="panel-collapse collapse ">
                                <div class="faq-answer">
                                    <p>
                                        El Usuario de Certificaciones es encargado del llenado de los datos de los Estudiantes,
                                        Caballeros Cadetes, Alumnos y personal civil que realice cualquier curso dentro de los
                                        Institutos de Formación y Especialización de la Armada Boliviana.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="row">
                        <div class="col-md-12">
                            <a data-toggle="collapse" href="#faq3" class="faq-question">Para qué sirve el menú Cursos?</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="faq3" class="panel-collapse collapse ">
                                <div class="faq-answer">
                                    <p>
                                        Sirve para agregar, modificar o eliminar los diferentes cursos que tienen los
                                        Institutos de Especialización.
                                        <br>En caso de ser un Instituto de Formación sirve para agregar, modificar o
                                        eliminar las diferentes promociones.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="row">
                        <div class="col-md-12">
                            <a data-toggle="collapse" href="#faq4" class="faq-question">Para qué sirve el menú Materias o Periodos?</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="faq4" class="panel-collapse collapse ">
                                <div class="faq-answer">
                                    <p>
                                        Sirve para agregar o eliminar las diferentes materias o periodos de los diferentes
                                        Institutos de Formación y Especialización de la Armada Boliviana.
                                        <br>Tenga en cuenta que no puede modificar el nombre de una materia o periodo
                                        ya que esto conllevaría a alteraciones en la Base de Datos del Sistema.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="row">
                        <div class="col-md-12">
                            <a data-toggle="collapse" href="#faq5" class="faq-question">Por qué no puedo ingresar un carnet de identidad con letras?</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="faq5" class="panel-collapse collapse ">
                                <div class="faq-answer">
                                    <p>
                                        Según el SEGIP, todos los carnet de identidad del Estado Plurinacional de Bolivia
                                        solo llevan números el cual identifica de manera única a una persona en el territorio
                                        boliviano, si usted tiene que ingresar un carnet con letras por favor envíe una
                                        fotocopia al Departamento VI para su implementación y futura corrección al Sistema de
                                        Certificaciones.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="row">
                        <div class="col-md-12">
                            <a data-toggle="collapse" href="#faq6" class="faq-question">Qué puedo hacer si existe un TIN con otra persona?</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="faq6" class="panel-collapse collapse ">
                                <div class="faq-answer">
                                    <p>
                                        La Tarjeta de Identificación Naval (TIN) no puede ser propiedad de dos personas ya que
                                        identifican a un individuo dentro de las filas de la Armada Boliviana.
                                        <br>En caso de tener el mencionado caso se le sugiere al interesado que solucione
                                        en el menor tiempo posible en el Departamento II "Inteligencia" del Comando
                                        de la Armada Boliviana ya que esta irregularidad puede llevar a mayores errores en
                                        futuro pejudicando de esta manera al intersado.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="row">
                        <div class="col-md-12">
                            <a data-toggle="collapse" href="#faq7" class="faq-question">Debo llenar los datos con mayúsculas o minúsculas?</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="faq7" class="panel-collapse collapse ">
                                <div class="faq-answer">
                                    <p>
                                        Para una normalización dentro del Sistema de Certificaciones de la Armada Boliviana, todo
                                        dato, nombre, apellido, materia, periodo, Instituto de formación y/o especialización deberá
                                        ser llenado la primera letra con mayúscula y las siguientes con minúsculas, debiendo tener
                                        mucho cuidado en la introducción de los datos ya que esto luego llega a una Certificación
                                        la cual lleva estándares de impresión que no pueden contener una mezcla de mayúsculas y
                                        minúsculas.
                                        <br>En caso se tuviera alguna duda sobre la escritura de alguna palabra se deberá
                                        proceder a la búsqueda de la misma en un diccionario, ya que son documentos legales
                                        y personales que tienen gran valor profesional, no se puede aceptar que personal profesional
                                        cometa errores ortográficos.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="row">
                        <div class="col-md-12">
                            <a data-toggle="collapse" href="#faq8" class="faq-question">Qué sucede si me equivoco al introducir los datos como ser notas?</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="faq8" class="panel-collapse collapse ">
                                <div class="faq-answer">
                                    <p>
                                        Cuando es asignado un Usuario para el manejo y llenado de datos el Departamento VI confiere
                                        una gran responsabilidad a una persona para el llenado de datos de los
                                        estudiantes que cursan los diferentes cursos de Especialización
                                        y Formación y por tal motivo no se pueden cometer errores, y en
                                        caso de cometerlos puede borrar las notas pero nunca modificarlas.
                                        <br>Todo ingreso, modificación, agregación y eliminación de datos
                                        en el Sistema esta registrado ya que cada Usuario ingresa con sus
                                        datos emitidos por el Departmento VI y cualquier notificación
                                        o error puede llevar a la auditoria del Sistema de Certificaciones
                                        y por consiguiente si se verificara que hubo malas intenciones
                                        se procederá como está estipulado en Reglamento.
                                        <br>Tranquilo estimado Usuario, si hace lo que le corresponde hacer
                                        dentro del marco de lo legal no tiene por que preocuparse.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="row">
                        <div class="col-md-12">
                            <a data-toggle="collapse" href="#faq9" class="faq-question">Pueden ingresar 2 o más personas con el mismo usuario?</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="faq9" class="panel-collapse collapse ">
                                <div class="faq-answer">
                                    <p>
                                        El Usuario y Contraseña son asignados a cierto personal que estará encargado
                                        del llenado de datos y solo sirve para esa persona, ya que cualquier
                                        resposabilidad recaerá sobre la persona dueña de la cuenta.
                                        <br>En caso necesite más de una persona para llenar puede
                                        solicitar otro Usuario para el Sistema.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="row">
                        <div class="col-md-12">
                            <a data-toggle="collapse" href="#faq10" class="faq-question">Qué debe ser lo primero que tengo que hacer al ingresar al Sistema por primera vez?</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="faq10" class="panel-collapse collapse ">
                                <div class="faq-answer">
                                    <p>
                                        Al ingresar al Sistema de Certificaciones por primera vez
                                        lo primero que deberá hacer es cambiar su contraseña para
                                        no tener ningún tipo de problemas a futuro.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="row">
                        <div class="col-md-12">
                            <a data-toggle="collapse" href="#faq11" class="faq-question">Qué sucede si ya no utilizaré el Sistema?</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="faq11" class="panel-collapse collapse ">
                                <div class="faq-answer">
                                    <p>
                                        Si ya no utilizará el Sistema para el llenado de datos por cambio de destino,
                                        puesto o cualquier otro motivo deberá elevar la eliminación del Usuario
                                        mediante conducto regular por medio de su Comandante de Unidad.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="row">
                        <div class="col-md-12">
                            <a data-toggle="collapse" href="#faq12" class="faq-question">Qué sucede si tengo dudas?</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="faq12" class="panel-collapse collapse ">
                                <div class="faq-answer">
                                    <p>
                                        Puede comunicarse con el Departamento VI para que cualquier
                                        duda sea despejada de manera correta.
                                        <br>No lo olvide: "El desconocimiento, no implica su no
                                        cumplimiento"
                                        <br>Estamos para cualquier duda.
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