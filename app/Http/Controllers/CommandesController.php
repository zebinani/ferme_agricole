<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Command ;

class CommandesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Commandes= \App\Command::orderBy('created_at','DESC')->get();
       
        return view('commandes.index',compact('Commandes'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $Clients = \App\Client::pluck( 'num_client','id');

 
        
        return view("commandes.create" ,compact('Clients'));
        
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $Commande= new Command();

        $Commande->client_id = $request->input('client_id');
        $Commande->article =$request->input('article');
        $Commande->reference=$request->input('reference');
        $Commande->quantite=$request->input('quantite');
        $Commande->date=$request->input('date');

        $Commande->save();
         return redirect('/Command');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($num_client)
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
       $Commandes = \App\Command::find($id);
       $Clients=\App\Client::pluck('num_client','id');
       
       return view('commandes.edit',compact('Commandes','Clients'));
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
            $Commandes =\App\Command::find($id);
            if($Commandes) $Commandes->update([
            'client_id'=>$request->input('client_id'),
            'article'=>$request->input('article'),
            'reference'=>$request->input('reference'),
            'quantite'=>$request->input('quantite'),
            'date'=>$request->input('date')
    
    ]);
         
         return redirect('/Command');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $Commandes = Command::find($id);
        if($Commandes)
        $Commandes->delete();
    return redirect()->route('Command.index');
    }
}
