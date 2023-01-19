<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    protected $fillable = [
        'title',
        'content_type',
        'total'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
