<li><a class="dropdown-item @if (Route::has('admin')) active @endif" href="{{ route('dashboard.admin.show') }}">Panel de administración</a></li>
<li><a class="dropdown-item @if (Route::has('role')) active @endif" href="{{ route('dashboard.role.index') }}">Roles</a></li>
<li><a class="dropdown-item @if (Route::has('permission')) active @endif" href="{{ route('dashboard.permission.index') }}">Permisos</a></li>
<li><a class="dropdown-item @if (Route::has('user')) active @endif" href="{{ route('dashboard.user.index') }}">Usuarios</a></li>
<li><a class="dropdown-item" href="{{ route('dashboard.dependence.index') }}">Dependencias</a></li>
<li><a class="dropdown-item @if (Route::has('person')) active @endif" href="{{ route('dashboard.person.create') }}">REGISTRO POR PERSONA
        NO LOCALIZADA</a>
    <ul>
        <li><a class="nav-link active" id="pills-person_report-tab" data-toggle="pill" href="#pills-person_report" role="tab" aria-controls="pills-person_report" aria-selected="true">Datos de la persona que reporta</a></li>
        <li><a class="nav-link" id="pills-general-tab" data-toggle="pill" href="#pills-general" role="tab" aria-controls="pills-general" aria-selected="false">Datos de persona no localizada</a></li>
    </ul>
</li>
<li><a class="dropdown-item" href="{{ route('dashboard.search.index') }}">BÚSQUEDA DE REGISTROS</a></li>
{{--<li><a class="dropdown-item" href="{{ route('dashboard.report.index') }}">Reportes</a></li>--}}