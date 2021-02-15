<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = ['from_id', 'to_id', 'message', 'event_id'];
    public function get_sender(){
        return $this->belongsTo(User::class, 'from_id');
    }
    public function event(){
        return $this->belongsTo(Event::class, 'event_id');
    }
}
