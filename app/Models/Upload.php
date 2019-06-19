<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Upload extends Model
{
    public function details()
    {
        return $this->belongsToMany('App\Models\Detail');
    }
}
