<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entity_city extends Model
{
    use HasFactory;

    public function getCity(){
        $city = City::find($this->city_id);
        return $city->city;
    }
    public function entity_city(){
        return $this->morphTo('entity');
    }
}
