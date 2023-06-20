<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function evaluation()
    {
        return $this->hasMany(Evaluation::class);
    }

    public function client(){
        return $this->belongsTo(User::class, 'client_id');
    }

    public function worker(){
        return $this->belongsTo(User::class, 'worker_id');
    }
}
