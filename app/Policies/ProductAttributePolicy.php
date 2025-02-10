<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\ProductAttribute;
use App\Models\User;

class ProductAttributePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any ProductAttribute');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, ProductAttribute $productattribute): bool
    {
        return $user->checkPermissionTo('view ProductAttribute');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create ProductAttribute');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ProductAttribute $productattribute): bool
    {
        return $user->checkPermissionTo('update ProductAttribute');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ProductAttribute $productattribute): bool
    {
        return $user->checkPermissionTo('delete ProductAttribute');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any ProductAttribute');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, ProductAttribute $productattribute): bool
    {
        return $user->checkPermissionTo('restore ProductAttribute');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any ProductAttribute');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, ProductAttribute $productattribute): bool
    {
        return $user->checkPermissionTo('replicate ProductAttribute');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder ProductAttribute');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, ProductAttribute $productattribute): bool
    {
        return $user->checkPermissionTo('force-delete ProductAttribute');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any ProductAttribute');
    }
}
