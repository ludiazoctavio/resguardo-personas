<li><a class="dropdown-item @if (Route::has('admin')) active @endif" href="{{ route('dashboard.admin.show') }}">Panel de administración</a></li>
<li><a class="dropdown-item @if (Route::has('role')) active @endif" href="{{ route('dashboard.role.index') }}">Roles</a></li>
<li><a class="dropdown-item" href="{{ route('dashboard.permission.index') }}">Permisos</a></li>
<li><a class="dropdown-item" href="{{ route('dashboard.user.index') }}">Usuarios</a></li>
<li><a class="dropdown-item" href="{{ route('dashboard.dependence.index') }}">Dependencias</a></li>
<li><a class="dropdown-item" href="{{ route('dashboard.person.index') }}">Personas</a></li>
<li><a class="dropdown-item" href="{{ route('dashboard.search.index') }}">Buscador</a></li>
<li><a class="dropdown-item" href="{{ route('dashboard.report.index') }}">Reportes</a></li>