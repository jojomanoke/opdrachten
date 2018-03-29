<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function bought()
    {
        return $this->hasMany('App\Bought');
    }
}
