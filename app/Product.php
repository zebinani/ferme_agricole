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

     public function getPrice(){
        $price=$this->price;
       
        return number_format($price, 2,',', '').'fcfa'; 
     }
}