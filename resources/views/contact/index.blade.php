@extends('layouts.layout')
@section('listecontact')
<br>
<div class="container">
<div class="row justify-content-center ">
<div class="col-8  "><h1>Liste des contacts</h1></div>
 <div class="col-10 align-items-center">
 <table class="table table-striped">
       <tr class=" bg-success">
           <th>#</th>          <th>id</th>  <th>NOM</th>    
           
           <th>PRENOM</th>        <th>EMAIL</th> <th>TELEPHONE</th> <th>MOTIFS</th>
       </tr>
       
       @foreach($Contacts as $contact)
   <tr>
       <td>#</td>
       <td>{{$contact->id ?? ''}}</td>
       <td>{{$contact->name ?? ''}}</td>
       <td>{{$contact->prenom ??''}} </td>
       <td>{{$contact->email ?? ''}} </td>
       <td>{{$contact->number ?? ''}} </td>
       <td>{{$contact->description ?? ''}} </td>
    </tr>   
      @endforeach 
      
        
   </table>    
</div>        
</div>        
</div>        

 @endsection