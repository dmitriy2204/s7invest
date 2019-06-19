<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $dates = ['deleted_at'];
    protected $guarded = ['id'];

    public function users()
    {
        return $this->hasMany('App\Models\User');
    }
}
