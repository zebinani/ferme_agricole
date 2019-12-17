<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    //
    protected $guarded = [];

    public function production(){

        return $this->belongsTO("App\Production");
    }
}
