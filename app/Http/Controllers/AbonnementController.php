<?php

namespace App\Http\Controllers;
 use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\AbonnementMail;
class AbonnementController extends Controller
{
    //
    public function expired(){
        $name = "Sellou";
        $date = "31 - 12 -2019";
        Mail::to('masellouddiallo@gmail.com')->send(new AbonnementMail($name, $date));
        return "Message envoyé";
     }
     
}
