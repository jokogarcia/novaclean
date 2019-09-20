@extends('layout')
@section('content')
<h1>Usuarios:</h1>

    <table class="listTable">
    
    <tr><th class="listTable">Nombre</th><th class="listTable">email</th></tr>
    @foreach($users as $user):
    <tr>
        <td class="listTable">
            <a href="/users/{{$user->id}}">{{$user->last_name}}, {{$user->name}}</a>
        </td>
        <td class="listTable">{{$user->email}}</td>
    </tr>
    @endforeach
</table>
@endsection