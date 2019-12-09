<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employ;

class EmploysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employs = \App\Employ::orderBy('created_at', 'DESC')->get();

        return view('employers.index', compact('employs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
         
    {
      //
      
       return view ('employers.create');
      
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
   $Employs = new Employ();

   $Employs->matricule = $request->input('matricule');
   $Employs->nom = $request->input('nom');
   $Employs->prenom = $request->input('prenom');
   $Employs->adresse = $request->input('adresse');
   $Employs->telephone = $request->input('telephone');
   
   $Employs->save();

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
        $Employs = \App\Employ::find($id);//on recupere le produit
    
    return view('employers.edit', compact('Employs'));
       
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
        $employs = \App\Employ::find($id);
        if($employs )  $employs->update([
           'matricule' => $request->input('matricule'),
           'nom' => $request->input('nom'),
           'prenom'=> $request->input('prenom'),
           'adresse'=> $request->input('adresse'),
           'telephone'=> $request->input('telephone')
           
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
        //
    }
}
