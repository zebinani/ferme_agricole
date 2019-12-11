<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Parcel;

class ParcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $parcels= \App\Parcel::orderBy('created_at', 'DESC')->get();

        return view('parcelles.index', compact('parcels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("parcelles.create");
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
        $parcels = new Parcel();

   $parcels->rentabilite = $request->input('rentabilite');
   $parcels->categorie= $request->input('categorie');
   $parcels->type_de_sol = $request->input('type_de_sol');
  
   $parcels->save();

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
        $parcels = \App\Parcel::find($id);//on recupere le produit
    
    return view('parcelles.edit', compact('parcels'));

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
        $parcels = \App\Parcel::find($id);
    
          if($parcels )  $parcels->update([
           'rentabilite' => $request->input('rentabilte'),
           'categorie' => $request->input('categorie'),
           'type_de_sol'=> $request->input('type_de_sol')
           
           
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
