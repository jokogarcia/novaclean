@extends('layout')
@section('content')
<h1>Usuarios:</h1>
<table>
    <tr><th>Nombre</th><th>email</th></tr>
    @foreach($users as $user):
    <tr>
        <td>{{$user->last_name}}, {{$user->name}}</td>
        <td>{{$user->email}}</td>
    </tr>
    @endforeach
</table>
@endsection