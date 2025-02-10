<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\ProductSpecificationGroup;
use App\Models\User;

class ProductSpecificationGroupPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any ProductSpecificationGroup');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, ProductSpecificationGroup $productspecificationgroup): bool
    {
        return $user->checkPermissionTo('view ProductSpecificationGroup');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create ProductSpecificationGroup');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ProductSpecificationGroup $productspecificationgroup): bool
    {
        return $user->checkPermissionTo('update ProductSpecificationGroup');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ProductSpecificationGroup $productspecificationgroup): bool
    {
        return $user->checkPermissionTo('delete ProductSpecificationGroup');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any ProductSpecificationGroup');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, ProductSpecificationGroup $productspecificationgroup): bool
    {
        return $user->checkPermissionTo('restore ProductSpecificationGroup');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any ProductSpecificationGroup');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, ProductSpecificationGroup $productspecificationgroup): bool
    {
        return $user->checkPermissionTo('replicate ProductSpecificationGroup');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder ProductSpecificationGroup');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, ProductSpecificationGroup $productspecificationgroup): bool
    {
        return $user->checkPermissionTo('force-delete ProductSpecificationGroup');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any ProductSpecificationGroup');
    }
}
