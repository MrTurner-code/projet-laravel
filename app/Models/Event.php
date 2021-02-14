<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
protected $fillable = ['_token', 'dateEvent','user_id', 'name', 'description'];
    public function city(){
        return $this->morphOne(Entity_city::class, 'entity');
    }
    public function interest(){
        return $this->morphOne(Entity_interest::class, 'entity');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
