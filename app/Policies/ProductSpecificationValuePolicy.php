<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\ProductSpecificationValue;
use App\Models\User;

class ProductSpecificationValuePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any ProductSpecificationValue');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, ProductSpecificationValue $productspecificationvalue): bool
    {
        return $user->checkPermissionTo('view ProductSpecificationValue');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create ProductSpecificationValue');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ProductSpecificationValue $productspecificationvalue): bool
    {
        return $user->checkPermissionTo('update ProductSpecificationValue');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ProductSpecificationValue $productspecificationvalue): bool
    {
        return $user->checkPermissionTo('delete ProductSpecificationValue');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any ProductSpecificationValue');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, ProductSpecificationValue $productspecificationvalue): bool
    {
        return $user->checkPermissionTo('restore ProductSpecificationValue');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any ProductSpecificationValue');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, ProductSpecificationValue $productspecificationvalue): bool
    {
        return $user->checkPermissionTo('replicate ProductSpecificationValue');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder ProductSpecificationValue');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, ProductSpecificationValue $productspecificationvalue): bool
    {
        return $user->checkPermissionTo('force-delete ProductSpecificationValue');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any ProductSpecificationValue');
    }
}
