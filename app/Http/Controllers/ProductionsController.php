<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Production;



class ProductionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Productions = \App\Production::orderBy('created_at', 'DESC')->get();
        
        return view('productions.index', compact('Productions'));
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ("productions.create");
       
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
        $Productions = new Production();
        $Productions->type = $request->input('type');
        $Productions->periode= $request->input('periode');
        $Productions->destination = $request->input('destination');
        
        $Productions->save();
     
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
        $Productions = \App\Production::find($id);//on recupere le produit
    
    return view('productions.edite', compact('Productions'));
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
        $Productions = \App\Production::find($id);
    
          if($Productions )  $Productions->update([
           'type' => $request->input('type'),
           'periode' => $request->input('periode'),
           'destination'=> $request->input('destination'),
           
           
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
