@extends('layout_login')
@section('Role_create')

<table class=table table-bodered > 
<tr>
<th>#</th><th>ID</th > <th>NOM</th>
</tr>

@foreach($Roles as $role)

 <tr>
 <td>#</td>
 <td>{{$role->id ?? ''}}</td>

 <td>{{$role->role ?? ''}}</td>
 </tr>
@endforeach

</table>

