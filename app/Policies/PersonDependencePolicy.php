<?php

namespace App\Policies;

use App\Person;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PersonDependencePolicy
{
    use HandlesAuthorization;

    public function index(User $user)
    {
        return $user->has_permission('index-person');
    }

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
}
