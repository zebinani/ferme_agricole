<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Productscontroller extends Controller
{
    public function index(){
        return view('contacts');
    }
    //

    public function show($id){
        return "je viens de creer un controller $id";
    }
}
