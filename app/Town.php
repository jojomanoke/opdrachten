<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    public function customer()
    {
        return $this->belongsToMany('App\Customer');
    }
}
