<div class="dropdown profile-element">
    <span>
        {{--@if($usuario->role == 'user')--}}

        <img alt="image" class="img-circle mi_logo" src="{{ asset('imagenes/user.jpg') }}" />

        {{--@else--}}

        {{--<img alt="image" class="img-circle mi_logo" src="{{ asset('imagenes/admin.jpg') }}" />--}}

        {{--@endif--}}
    </span>

    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
        <span class="clear">
            <span class="block m-t-xs">
                {{--<strong class="font-bold">{{ $usuario->grade->grade }} {{ $usuario->especialty->especialty }} {{ $person->getNameComplete() }}</strong>--}}
                G.A.M.L.P.
            </span>

            <span class="text-muted text-xs block">
                {{--{{ $usuario->rol }}<b class="caret"></b>--}}
                GOBIERNO MUNICIPAL
            </span>
        </span>
    </a>

    {{--<ul class="dropdown-menu animated fadeInRight m-t-xs">--}}
        {{--<li>--}}
            {{--<a href="{{ route('logout') }}">Cerrar sesión</a>--}}
        {{--</li>--}}
    {{--</ul>--}}
</div>