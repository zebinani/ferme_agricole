<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    //
    protected $guarded = [];

    public function Production(){

        return $this->hasOne("App\Production");
    }

    public function user(){

        return $this->belongsTo("App\User");
    }
}
