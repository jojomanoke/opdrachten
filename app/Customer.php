<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    public function bought()
    {
        return $this->hasMany('App\Bought');
    }

    public function town()
    {
        return $this->hasOne('App\Town');
    }
}
