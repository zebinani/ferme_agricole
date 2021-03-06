<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;


class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $Clients=\App\Client::orderBY('created_at','DESC')->get();
       return view('Clients.index',compact('Clients'));
    }
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('Clients.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'num_client' => 'required | max:6' ,
            'nom' => 'required | max:50' ,
            'prenom' => 'required | max:50' ,
            'adresse' => 'required | max:50' ,
            'telephone' => 'required | max:12' ,
            ]);
            
        $Clients= new Client();
        
        $Clients->num_client=$request->input('num_client');
        $Clients->nom=$request->input('nom');
        $Clients->prenom=$request->input('prenom');
        $Clients->adresse=$request->input('adresse');
        $Clients->telephone=$request->input('telephone');
        $Clients ->save();

       return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $client= \App\Client::find($id);

        return view('Clients.edit',compact('client'));
    }
    
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $client =\App\Client::find($id);
        if($client) $client->update([
        'Num_client'=>$request->input('num_client'),
        'nom'=>$request->input('nom'),
        'prenom'=>$request->input('prenom'),
        'adresse'=>$request->input('adresse'),
        'telephone'=>$request->input('telephone')
        ]);
        return redirect()->back();
    }
     
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Clients = Client::find($id);
            if($Clients)
            $Clients->delete();
        return redirect()->route('Client.index');
    }
}
