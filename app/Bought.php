<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bought extends Model
{
    protected $table = 'bought';

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
