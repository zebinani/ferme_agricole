<?php

namespace App\Http\Controllers;
use App\Materiel;
use Illuminate\Http\Request;


class MaterielsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $Materiels= \App\Materiel::orderBy('created_at', 'DESC')->get();

        return view('materiels.index', compact('Materiels'));
    }
   // compact('materiel')
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('materiels.create');
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $materiel = new Materiel();

            $materiel->name = $request->input('name');
            
            $materiel->amortissement = $request->input('amortissement');

            $materiel->description = $request->input('description');
            
            $materiel->save();

            return redirect()->route('Materiel.index')->with(['success'=>"Materiels enrigistre avec success"]);

            
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
        //Materiels
        $materiels = \App\Materiel::find($id);//on recupere le produit
    
        return view('materiels.edit', compact('materiels'));
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
        $materiels = \App\Materiel::find($id);
        if($materiels )  $materiels->update([
           'name' => $request->input('name'),
           'amortissement'=> $request->input('amortissement'),
           'description' => $request->input('description')
           
           
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
        $Materiels = Materiel::find($id);
            if($Materiels)
            $Materiels->delete();
        return redirect()->route('Materiel');
    }
}
