<li><a class="dropdown-item {!! active_class(route('dashboard.admin.show')) !!}" href="{{ route('dashboard.admin.show') }}">Panel de administración</a></li>
<li><a class="dropdown-item {!! active_class(route('dashboard.role.index')) !!}" href="{{ route('dashboard.role.index') }}">Roles</a></li>
<li><a class="dropdown-item {!! active_class(route('dashboard.permission.index')) !!}" href="{{ route('dashboard.permission.index') }}">Permisos</a></li>
<li><a class="dropdown-item {!! active_class(route('dashboard.user.index')) !!}" href="{{ route('dashboard.user.index') }}">Usuarios</a></li>
<li><a class="dropdown-item {!! active_class(route('dashboard.dependence.index')) !!}" href="{{ route('dashboard.dependence.index') }}">Dependencias</a></li>
<li><a class="dropdown-item {!! active_class(route('dashboard.person.create')) !!}" href="{{ route('dashboard.person.create') }}">
        REGISTRO POR PERSONA NO LOCALIZADA
    </a>
    <ul class="nav nav-pills" role="tablist">
        <li><a class="nav-link" id="pills-person_report-tab" data-toggle="pill" href="#pills-person_report" role="tab" aria-controls="pills-person_report" aria-selected="false">Datos de la persona que reporta</a></li>
        <li><a class="nav-link" id="pills-general-tab" data-toggle="pill" href="#pills-general" role="tab" aria-controls="pills-general" aria-selected="false">Datos de persona no localizada</a></li>
    </ul>
</li>
<li><a class="dropdown-item {!! active_class(route('dashboard.search.index')) !!}" href="{{ route('dashboard.search.index') }}">BÚSQUEDA DE REGISTROS</a></li>
<li><a class="dropdown-item {!! active_class(route('dependence.person_dependence.create_identified')) !!}" href="{{ route('dependence.person_dependence.create_identified') }}">REGISTRO POR PERSONA IDENTIFICADA</a>
<li><a class="dropdown-item {!! active_class(route('dependence.person_dependence.create')) !!}" href="{{ route('dependence.person_dependence.create') }}">REGISTRO POR PERSONA NO IDENTIFICADA</a>
<li><a class="dropdown-item {!! active_class(route('dependence.search_dependence.index')) !!}" href="{{ route('dependence.search_dependence.index') }}">BÚSQUEDA DE REGISTROS</a></li>