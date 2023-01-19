<?php
namespace App\Repositories;

use App\Models\Stat;
use App\Models\User;

class StatRepository {
    public function all() {

    }

    public function getGamingStatsByUserId($userId)
    {
        return Stat::where([
            ['user_id', '=', $userId],
            ['content_type', '=', 'gaming']
        ])->all();
    }
}
