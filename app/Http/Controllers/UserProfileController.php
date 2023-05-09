<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function profileEdit(User $user)
    {
        return view('backend.profile.edit');
    }
}
