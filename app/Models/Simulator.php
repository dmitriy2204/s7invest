<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Simulator extends Model
{
    use SoftDeletes;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function details()
    {
        return $this->hasMany('App\Models\Detail');
    }

    public function PutDetails()
    {
        return $this->hasMany('App\Models\PutDetail');
    }

    public function TakenDetails()
    {
        return $this->hasMany('App\Models\TakenDetail');
    }
}
