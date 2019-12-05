<?php

namespace App\Policies;

use App\Search;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SearchPolicy
{
    use HandlesAuthorization;

    public function index(User $user)
    {
        return $user->has_permission('index-search');
    }

    /**
     * Determine whether the user can view any searches.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the search.
     *
     * @param  \App\User  $user
     * @param  \App\Search  $search
     * @return mixed
     */
    public function view(User $user, Search $search)
    {
        return $user->has_permission('view-search');
    }

    /**
     * Determine whether the user can create searches.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the search.
     *
     * @param  \App\User  $user
     * @param  \App\Search  $search
     * @return mixed
     */
    public function update(User $user, Search $search)
    {
        //
    }

    /**
     * Determine whether the user can delete the search.
     *
     * @param  \App\User  $user
     * @param  \App\Search  $search
     * @return mixed
     */
    public function delete(User $user, Search $search)
    {
        //
    }

    /**
     * Determine whether the user can restore the search.
     *
     * @param  \App\User  $user
     * @param  \App\Search  $search
     * @return mixed
     */
    public function restore(User $user, Search $search)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the search.
     *
     * @param  \App\User  $user
     * @param  \App\Search  $search
     * @return mixed
     */
    public function forceDelete(User $user, Search $search)
    {
        //
    }
}
