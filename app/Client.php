<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $guarded = [];
    

    public function Command(){

        return $this->hasmany("App\Command");
}

}