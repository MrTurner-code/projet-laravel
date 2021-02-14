<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entity_city extends Model
{
    use HasFactory;
protected $fillable = ['city_id', 'entity_type', 'entity_id',];
    public function entity_city()
    {
        return $this->morphTo('entity');
    }
    public function getCity()
    {
        $city = City::find($this->city_id);
        return $city->city;
    }
}
