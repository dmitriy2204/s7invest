<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Detail extends Model
{
    use SoftDeletes;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function locations()
    {
        return $this->belongsToMany('App\Models\Location');
    }

    public function uploads()
    {
        return $this->hasMany('App\Models\Upload');
    }

    public function systems()
    {
        return $this->belongsToMany('App\Models\System');
    }

    public function simulators()
    {
        return $this->belongsToMany('App\Models\Simulator');
    }

    public function status()
    {
        return $this->hasOne('App\Models\Status');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\Type');
    }

    public function putDetails()
    {
        return $this->hasMany('AApp\Models\PutDetail');
    }

    public function takenDetails()
    {
        return $this->hasMany('AApp\Models\TakenDetail');
    }

    public function orders()
    {
        return $this->hasMany('AApp\Models\Order');
    }
}
