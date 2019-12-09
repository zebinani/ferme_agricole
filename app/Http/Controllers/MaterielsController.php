<?php

namespace App\Http\Controllers;

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
    
        $materiels= \App\Materiel::orderBy('created_at', 'DESC')->get();

        return view('materiels.index', compact('materiels'));
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
        return view ('materiels.index');
       
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
     
            $materiels = new Materiel();

            $materiels->name = $request->input('name');

            $materiels->description = $request->input('description');

            $materiels->amortissement = $request->input('amortissement');
            
            $materiels->save();

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
        $materiel = \App\Employ::find($id);//on recupere le produit
    
        return view('materiels.edit', compact('materiel'));
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
        $materiel = \App\Employ::find($id);
        if($materiel )  $materiel->update([
           'name' => $request->input('name'),
           'description' => $request->input('descrption'),
           'armortissement'=> $request->input('amortissement')
           
           
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
