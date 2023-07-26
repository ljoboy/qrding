<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\User;

final class UserPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {

    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, User $users): bool
    {

    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {

    }

    /**
     * Determine whether the user can update the model.
     * @param User $user
     * @param User $users
     * @return bool
     */
    public function update(User $user, User $users): bool
    {

    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, User $users): bool
    {

    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, User $users): bool
    {

    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, User $users): bool
    {

    }
}
