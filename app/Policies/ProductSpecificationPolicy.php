<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\ProductSpecification;
use App\Models\User;

class ProductSpecificationPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any ProductSpecification');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, ProductSpecification $productspecification): bool
    {
        return $user->checkPermissionTo('view ProductSpecification');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create ProductSpecification');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ProductSpecification $productspecification): bool
    {
        return $user->checkPermissionTo('update ProductSpecification');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ProductSpecification $productspecification): bool
    {
        return $user->checkPermissionTo('delete ProductSpecification');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any ProductSpecification');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, ProductSpecification $productspecification): bool
    {
        return $user->checkPermissionTo('restore ProductSpecification');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any ProductSpecification');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, ProductSpecification $productspecification): bool
    {
        return $user->checkPermissionTo('replicate ProductSpecification');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder ProductSpecification');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, ProductSpecification $productspecification): bool
    {
        return $user->checkPermissionTo('force-delete ProductSpecification');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any ProductSpecification');
    }
}
