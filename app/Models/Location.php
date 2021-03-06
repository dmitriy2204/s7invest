<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    public function details()
    {
        return $this->hasMany('App\Models\Detail');
    }
}
