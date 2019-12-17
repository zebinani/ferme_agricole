<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $guarded =[];

    public function employ()
    {
        return $this->hasmany("App\Employ");
    }
}
