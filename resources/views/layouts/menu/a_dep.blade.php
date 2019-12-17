<li><a class="dropdown-item @if (Route::has('person_dependence')) active @endif" href="{{ route('dependence.person_dependence.create_identified') }}">REGISTRO POR PERSONA IDENTIFICADA</a>
<li><a class="dropdown-item @if (Route::has('person_dependence')) active @endif" href="{{ route('dependence.person_dependence.create') }}">REGISTRO POR PERSONA NO IDENTIFICADA</a>
<li><a class="dropdown-item" href="{{ route('dependence.search_dependence.index') }}">BÚSQUEDA DE REGISTROS</a></li>
