<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function users()
    {
        return $this-> hasMany(User::class);
    }

    public function state()
    {
        return $this->belongsToMany(State::class);
    }
}
