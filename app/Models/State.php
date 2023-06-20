<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    public function town()
    {
        return $this->hasMany(Town::class);
    }

    public function users()
    {
        return $this->hasManyThrough(User::class, Town::class);
    }
}
