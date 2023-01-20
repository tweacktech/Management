<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    public function users() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function views() {
        return $this->hasMany(View::class, 'post_id', 'id');
    }

    public function clicks() {
        return $this->hasMany(Click::class, 'post_id', 'id');
    }

    public function dollar_earned() {
        return $this->hasMany(DollarEarned::class, 'post_id', 'id');
    }
}
