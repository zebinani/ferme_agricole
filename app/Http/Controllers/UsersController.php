<?php

namespace App\Http\Controllers;
use App\user;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function Afficher()
    {
        //
        $parcels= \App\User::orderBy('created_at', 'DESC')->get();

        return view('auth.affiches', compact('parcels'));
     }
}
