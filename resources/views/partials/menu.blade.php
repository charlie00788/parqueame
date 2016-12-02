@if($usuario->role == 'admin')

    <li>
        <a href="{{ route('admin.getUsers') }}"><i class="fa fa-user"></i> <span class="nav-label">Usuarios</span></a>
    </li>

    <li>
        <a href="{{ route('admin.getReport') }}"><i class="fa fa-print"></i> <span class="nav-label">Reportes</span></a>
    </li>

@else

    <li>
        <a href="{{ route('owner.getOwners') }}"><i class="fa fa-user"></i> <span class="nav-label">Propietarios</span></a>
    </li>

@endif