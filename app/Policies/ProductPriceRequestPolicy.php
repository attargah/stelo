<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\ProductPriceRequest;
use App\Models\User;

class ProductPriceRequestPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any ProductPriceRequest');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, ProductPriceRequest $productpricerequest): bool
    {
        return $user->checkPermissionTo('view ProductPriceRequest');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create ProductPriceRequest');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ProductPriceRequest $productpricerequest): bool
    {
        return $user->checkPermissionTo('update ProductPriceRequest');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ProductPriceRequest $productpricerequest): bool
    {
        return $user->checkPermissionTo('delete ProductPriceRequest');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any ProductPriceRequest');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, ProductPriceRequest $productpricerequest): bool
    {
        return $user->checkPermissionTo('restore ProductPriceRequest');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any ProductPriceRequest');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, ProductPriceRequest $productpricerequest): bool
    {
        return $user->checkPermissionTo('replicate ProductPriceRequest');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder ProductPriceRequest');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, ProductPriceRequest $productpricerequest): bool
    {
        return $user->checkPermissionTo('force-delete ProductPriceRequest');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any ProductPriceRequest');
    }
}
