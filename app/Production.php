<?php

namespace App;



use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    //
    
    protected $guarded =[];

    public function products()
    {
        return $this->belongsTo("App\Product");
    }
    
     public function materiels(){
         return $this->
     }
}
