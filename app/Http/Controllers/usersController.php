<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $this->authorize('Admin');
       $users=\App\User::all();
       
       return view('Admin.index',compact('users'));
       
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $this->authorize('Admin');
       return view ('Admin.create');
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
       $this->authorize('Admin');

        $Users = new User();

        $Users->name =$request->input('name');

        $Users->email =$request->input('email');

        $Users->password = Hash::make($request->input('password'));
       
        $Users->role=$request->input('role');
       
        $Users->save();

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
        $this->authorize('Admin');
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
        $this->authorize('Admin');
        $Users = \App\User::find($id);//on recupere le produit
    
        return view('Admin.edit', compact('Users'));
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
        $Users = \App\User::find($id);
          if($Users){
           $Users->update([
           'name' => $request->input('name'),
           'email' => $request->input('email'),
           'password'=> $request->input('password'),
           'role'=> $request->input('role')
           
       ]);
      
    }
    return redirect()->route('User.index');
   
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
        $this->authorize('Admin');

        $Users= \App\User::find($id);
        //dd($Employs);
        if($Users)

        $Users->delete();

        return redirect()->route('User.index');
    }
}
