<?php

namespace App\Policies;

use App\Dependence;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DependencePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any dependences.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the dependence.
     *
     * @param  \App\User  $user
     * @param  \App\Dependence  $dependence
     * @return mixed
     */
    public function view(User $user, Dependence $dependence)
    {
        //
    }

    /**
     * Determine whether the user can create dependences.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the dependence.
     *
     * @param  \App\User  $user
     * @param  \App\Dependence  $dependence
     * @return mixed
     */
    public function update(User $user, Dependence $dependence)
    {
        //
    }

    /**
     * Determine whether the user can delete the dependence.
     *
     * @param  \App\User  $user
     * @param  \App\Dependence  $dependence
     * @return mixed
     */
    public function delete(User $user, Dependence $dependence)
    {
        //
    }

    /**
     * Determine whether the user can restore the dependence.
     *
     * @param  \App\User  $user
     * @param  \App\Dependence  $dependence
     * @return mixed
     */
    public function restore(User $user, Dependence $dependence)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the dependence.
     *
     * @param  \App\User  $user
     * @param  \App\Dependence  $dependence
     * @return mixed
     */
    public function forceDelete(User $user, Dependence $dependence)
    {
        //
    }
}
