<?php

namespace App\Repositories;

use App\Models\Stat;
use App\Models\User;

class UserRepository
{
    public function isSubscribed($userId)
    {
        return (bool)User::where([
            ['id', $userId],
            ['is_subscribed', true]
        ])->first();
    }
}
