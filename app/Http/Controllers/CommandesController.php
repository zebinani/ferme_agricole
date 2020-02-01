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

        $this->authorize('Admin');
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
       // $Clients = \App\Client::pluck( 'num_client','id');
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
       //$this->authorize('Admin');
        
        $Commande= new Command();

        $Commande->article =$request->input('article');
        $Commande->reference=$request->input('reference');
        $Commande->quantite=$request->input('quantite');
        $Commande->adresse=$request->input('adresse');
        $Commande->phone=$request->input('phone');
       // dd("$Commande");
       $Commande->save();

       return redirect('/')->with(['danger' => "Employe enregistré"]);

       //return redirect()->route('/accueil')->with(['success' => "Employe enregistré"]);
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
        $this->authorize('Admin');
        //
       $Commandes = \App\Command::find($id);
      //dd("$Commandes");
      return view('commandes.edit',compact('Commandes'));
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
             $this->authorize('Admin');

         $Commandes =\App\Command::find($id);

          if($Commandes) $Commandes->update([
            
            'article'=>$request->input('article'),
            'reference'=>$request->input('reference'),
            'quantite'=>$request->input('quantite'),
            'adresse'=>$request->input('adresse'),
            'phone'=>$request->input('phone')
    
    ]);
        // dd('$Commandes');
         return redirect()->route('Command.index')->with(['success' => "Employe enregistré"]);;
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
