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
     * Determine whether the user can view any people.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the person.
     *
     * @param  \App\User  $user
     * @param  \App\Person  $person
     * @return mixed
     */
    public function view(User $user, Person $person)
    {
        return $user->has_permission('view-person');
    }

    /**
     * Determine whether the user can create people.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->has_permission('create-person');
    }

    /**
     * Determine whether the user can update the person.
     *
     * @param  \App\User  $user
     * @param  \App\Person  $person
     * @return mixed
     */
    public function update(User $user, Person $person)
    {
        return $user->has_permission('update-person');
    }

    /**
     * Determine whether the user can delete the person.
     *
     * @param  \App\User  $user
     * @param  \App\Person  $person
     * @return mixed
     */
    public function delete(User $user, Person $person)
    {
        return $user->has_permission('delete-person');
    }

    /**
     * Determine whether the user can restore the person.
     *
     * @param  \App\User  $user
     * @param  \App\Person  $person
     * @return mixed
     */
    public function restore(User $user, Person $person)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the person.
     *
     * @param  \App\User  $user
     * @param  \App\Person  $person
     * @return mixed
     */
    public function forceDelete(User $user, Person $person)
    {
        //
    }
}
