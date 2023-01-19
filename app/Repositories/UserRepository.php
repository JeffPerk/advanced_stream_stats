<?php

namespace App\Repositories;

use App\Models\Stat;
use App\Models\User;

class UserRepository
{
    public function isSubscribed($userId)
    {
        return User::where('id', '=', $userId)->findOrFail();
    }
}
