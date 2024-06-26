<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];
    
    public function work()
    {
        return $this->belongsTo(Work::class);
    }
}
