<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TakenDetail extends Model
{
    use SoftDeletes;
    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function simulators()
    {
        return $this->belongsToMany('App\Models\Simulator');
    }

    public function detail()
    {
        return $this->belongsTo('App\Models\Detail');
    }
}
