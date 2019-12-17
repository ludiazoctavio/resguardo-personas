<li><a class="dropdown-item @if (Route::has('admin')) active @endif" href="{{ route('dashboard.admin.show') }}">Panel de administración</a></li>
<li><a class="dropdown-item @if (Route::has('role')) active @endif" href="{{ route('dashboard.role.index') }}">Roles</a></li>
<li><a class="dropdown-item @if (Route::has('permission')) active @endif" href="{{ route('dashboard.permission.index') }}">Permisos</a></li>
<li><a class="dropdown-item @if (Route::has('user')) active @endif" href="{{ route('dashboard.user.index') }}">Usuarios</a></li>
<li><a class="dropdown-item" href="{{ route('dashboard.dependence.index') }}">Dependencias</a></li>
<li><a class="dropdown-item @if (Route::has('person')) active @endif" href="{{ route('dashboard.person.create') }}">REGISTRO POR PERSONA
        NO LOCALIZADA</a>
    <ul class="nav nav-pills" role="tablist">
        <li><a class="nav-link" id="pills-person_report-tab" data-toggle="pill" href="#pills-person_report" role="tab" aria-controls="pills-person_report" aria-selected="false">Datos de la persona que reporta</a></li>
        <li><a class="nav-link" id="pills-general-tab" data-toggle="pill" href="#pills-general" role="tab" aria-controls="pills-general" aria-selected="false">Datos de persona no localizada</a></li>
    </ul>
</li>
<li><a class="dropdown-item" href="{{ route('dashboard.search.index') }}">BÚSQUEDA DE REGISTROS</a></li>
{{--<li><a class="dropdown-item" href="{{ route('dashboard.report.index') }}">Reportes</a></li>--}}
<li><a class="dropdown-item" href="#">Menú Alimentador dependencia</a></li>
<li><a class="dropdown-item @if (Route::has('person_dependence')) active @endif" href="{{ route('dependence.person_dependence.create_identified') }}">REGISTRO POR PERSONA IDENTIFICADA</a>
<li><a class="dropdown-item @if (Route::has('person_dependence')) active @endif" href="{{ route('dependence.person_dependence.create') }}">REGISTRO POR PERSONA NO IDENTIFICADA</a>
<li><a class="dropdown-item" href="{{ route('dependence.search_dependence.index') }}">BÚSQUEDA DE REGISTROS</a></li>