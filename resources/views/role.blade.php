@extends('layout')
@section('role_page')

<table class="table table-bordered">
<thead>
<tr>
<th>#</th>
<th>ID</th>
<th>NOM</th>
</tr>
</thead>
<tbody>

@foreach($Roles as $role)
<tr>
<th>{{$role->id ?? '' }}</th>
<th>{{role->name ??''}}</th>
</tr>
</tbody>
@endforeach
</table>



@endsection