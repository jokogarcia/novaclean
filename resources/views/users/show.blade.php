@extends('layout')
@section('content')
    <h1>{{$user->name}}, {{$user->last_name}}</h1>
    <img class="user_photo" src="{{$user->photo_url}}"/>
        <p>Email: <a href="mailto:{{$user->email}}">{{$user->email}}</a>
        <p>Domicilio: {{$user->home_address}}
            Telefono: <a href="tel:{{$user->phone}}">{{$user->phone}}</a>
        <p>DNI: {{$user->dni}}
        <p>CUIT: {{$user->cuit}}
        <p>Sexo: {{$user->gender}}
        <p>Nacionalidad: {{$user->nationality}}
        <p>Localidad_id: {{$user->localidad_id}}
                
    <a href="/users/{{$user->id}}/edit">Editar</a>
    
@endsection