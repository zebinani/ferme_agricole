<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public function User(){
    return $this->belongsTo('App\User');
    }
}
