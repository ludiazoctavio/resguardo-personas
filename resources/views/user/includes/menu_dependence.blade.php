<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action active">
        Perfil
    </a>
    <a href="{{ route('dependence.user_dependence.edit', $user) }}" class="list-group-item list-group-item-action">
        Editar
    </a>
    <a href="#" class="list-group-item list-group-item-action">Cambiar contraseña</a>
    <a href="{{ route('dependence.user_dependence.assign_role', $user) }}" class="list-group-item list-group-item-action">Asignar roles</a>
</div>