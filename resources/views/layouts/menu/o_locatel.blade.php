<li><a class="dropdown-item @if (Route::has('person')) active @endif" href="{{ route('dashboard.person.create') }}">REGISTRO POR PERSONA
    NO LOCALIZADA</a>
<ul>
    <li><a class="nav-link active" id="pills-person_report-tab" data-toggle="pill" href="#pills-person_report" role="tab" aria-controls="pills-person_report" aria-selected="true">Datos de la persona que reporta</a></li>
    <li><a class="nav-link" id="pills-general-tab" data-toggle="pill" href="#pills-general" role="tab" aria-controls="pills-general" aria-selected="false">Datos de persona no localizada</a></li>
</ul>
</li>
<li><a class="dropdown-item" href="{{ route('dashboard.search.index') }}">BÚSQUEDA DE REGISTROS</a></li>