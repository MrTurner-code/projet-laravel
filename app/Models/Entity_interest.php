<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entity_interest extends Model
{
    use HasFactory;

    public function entity_interest()
    {
        return $this->morphTo('entity');
    }
    public function getInterest()
    {
        $interest = Interest::find($this->interest_id);
        return $interest->interest;
    }
}
