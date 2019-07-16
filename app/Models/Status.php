<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function simulators()
    {
        return $this->belongsToMany('App\Models\Detail');
    }
}
