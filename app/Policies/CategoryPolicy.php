<?php

namespace App\Policies;

use App\Models\User;

class CategoryPolicy
{
    
    public function __construct()
    {
        
    }
    public function create(User $user)
    {
            if (auth()->user()->role_id == 1) {
                return true;
            }else{
                return false;
            }
    }
}
