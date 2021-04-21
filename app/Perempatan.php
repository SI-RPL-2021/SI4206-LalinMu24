<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perempatan extends Model
{
    public function lengans()
    {
        return $this->hasMany('App\Lengan');
    }
}
