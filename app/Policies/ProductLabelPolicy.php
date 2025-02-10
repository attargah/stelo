<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\ProductLabel;
use App\Models\User;

class ProductLabelPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any ProductLabel');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, ProductLabel $productlabel): bool
    {
        return $user->checkPermissionTo('view ProductLabel');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create ProductLabel');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ProductLabel $productlabel): bool
    {
        return $user->checkPermissionTo('update ProductLabel');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ProductLabel $productlabel): bool
    {
        return $user->checkPermissionTo('delete ProductLabel');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any ProductLabel');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, ProductLabel $productlabel): bool
    {
        return $user->checkPermissionTo('restore ProductLabel');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any ProductLabel');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, ProductLabel $productlabel): bool
    {
        return $user->checkPermissionTo('replicate ProductLabel');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder ProductLabel');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, ProductLabel $productlabel): bool
    {
        return $user->checkPermissionTo('force-delete ProductLabel');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any ProductLabel');
    }
}
