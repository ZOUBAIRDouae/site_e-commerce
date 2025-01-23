<?php

namespace App\Policies;

use App\Models\User;

class ProductPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    
    public function update(User $user, Product $product)
    {
        return $user->id === $product->user_id || $user->hasRole('admin');
    }
}
