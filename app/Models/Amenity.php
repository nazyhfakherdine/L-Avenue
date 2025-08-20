<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    protected $fillable = ['name', 'description','price'];

    public function rooms()
    {
        return $this->belongsToMany(Room::class);
    }
}
