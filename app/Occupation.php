<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    //
    protected $guarded =[];

    public function Employ(){

        return $this->hasmany('App\Employ');

}

}
