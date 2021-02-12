<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    public function interest()
    {
        return $this->morphOne(Interest::class, 'entity');
    }
    public function city(){
        return $this->morphOne(City::class, 'entity');
    }
}
