<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $guarded =[];

    public function production(){

        return $this->belongsTo("App\Production");
    }

     
}