<?php

namespace App\Policies;

use App\Search;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SearchDependencePolicy
{
    use HandlesAuthorization;

    public function index(User $user)
    {
        return $user->has_permission('index-search');
    }

    public function view(User $user, Search $search)
    {
        return $user->has_permission('view-search');
    }
}
