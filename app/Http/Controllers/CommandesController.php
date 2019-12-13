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
        return view("commandes.create");
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

        $Commande->client =$request->input('client');
        $Commande->article =$request->input('article');
        $Commande->reference=$request->input('reference');
        $Commande->quantite=$request->input('quantite');
        $Commande->date=$request->input('date');

        $Commande->save();
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
       $commandes = \App\Command::find($id);
       
       return view('commandes.edit',compact('commandes'));
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
            $Commandes =App\Command::find($id);
            if($Commandes) $Commandes->update([
            'client'=>$request->input('client'),
            'article'=>$request->input('article'),
            'referencce'=>$request->input('reference'),
            'quantite'=>$request->input('quantite'),
            'date'=>$request->input('date')
    
    ]);
         return redirect('/')->back();
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
    }
}