<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class System extends Model
{
    use SoftDeletes;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function details()
    {
        return $this->hasMany('App\Models\Detail');
    }
}
