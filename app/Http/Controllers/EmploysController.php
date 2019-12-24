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

        return view('employers.index', compact('employs','department'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
         
    {
      
         $Departments = \App\Department::pluck( 'name','id');

         return view('employers.create', compact('Departments'));
       

   


      
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
   $employs = new Employ();
   
   $employs->matricule = $request->input('matricule');
   $employs->nom = $request->input('nom');
   $employs->prenom = $request->input('prenom');
   $employs->adresse = $request->input('adresse');
   $employs->telephone = $request->input('telephone');

   $employs->department_id = $request->input('Department_id');
   
   $employs->save();

   return redirect('/');

   
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
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
        $Departments = \App\Department::pluck( 'name','id');

        return view('employers.edit', compact('Employs','Departments'));
       
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
           'telephone'=> $request->input('telephone'),
           'Department_id'=> $request->input('Department_id')
           
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
