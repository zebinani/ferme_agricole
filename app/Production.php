<?php

namespace App;



use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    //
    
    protected $guarded =[];

    public function products()
    {
        return $this->hasMany("App\Product");
    }
    
     public function command(){

         return $this->hasMany("App\Command");
     }
     public function parcel(){

         return $this->hasMany("App\Parcel");
     }
}
