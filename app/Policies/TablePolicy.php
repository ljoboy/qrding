<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\Table;
use App\Models\User;

final class TablePolicy
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
    public function view(User $user, Table $table): bool
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
     */
    public function update(User $user, Table $table): bool
    {

    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Table $table): bool
    {

    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Table $table): bool
    {

    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Table $table): bool
    {

    }
}
