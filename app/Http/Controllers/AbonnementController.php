<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbonnementController extends Controller
{
    //
    public function expired(){
        $name = "Amadou";
        $date = "31 - 12 -2019";
        Illuminate\Support\Facades\Mail::to('masellouddiallo@gmail.com')->send(new AbonnementMail($name, $date));
        return "Message envoyé";
     }
     
}
