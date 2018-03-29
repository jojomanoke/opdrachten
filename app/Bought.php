<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bought extends Model
{
    protected $table = 'bought';

    public function customer()
    {
        return $this->hasOne('App\Customer');
    }
    public function product()
    {
        return $this->hasOne('App\Product');
    }
}
