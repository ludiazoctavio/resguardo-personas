<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action active">
        Perfil
    </a>
    <a href="{{ route('dashboard.user.edit', $user) }}" class="list-group-item list-group-item-action">
        Editar
    </a>
    <a href="#" class="list-group-item list-group-item-action">Cambiar contraseña</a>
    <a href="{{ route('dashboard.user.assign_role', $user) }}" class="list-group-item list-group-item-action">Asignar roles</a>
    <a href="{{ route('dashboard.user.assign_permission', $user) }}" class="list-group-item list-group-item-action">Asignar permissos</a>
    <a href="#" class="list-group-item list-group-item-action disabled">#####</a>
</div>