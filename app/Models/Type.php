<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function details()
    {
        return $this->hasMany('App\Models\Detail');
    }
}
