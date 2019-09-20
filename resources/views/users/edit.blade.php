@extends('layout')
@section('content')
    <h1>Editar usuario: {{$user->name}}</h1>
    <form method="POST" action="/users/{{$user->id}}">
        {{ method_field('PATCH')}}
        {{ csrf_field() }}
        <p>Nombre: <input name="name" type="" value="{{$user->name}}"/> Apellido: <input name="last_name" value="{{$user->last_name}}"/>
        <p>Email: <input name="email" type="email" value="{{$user->email}}"/>
        <p>Contraseña: <input type="password" value="{{$user->password}}"/>
        <p>Domicilio: <input name="home_address" type="" value="{{$user->home_address}}"/>
            Telefono: <input type="tel" name="phone" value="{{$user->phone}}"/>
        <p>DNI: <input name="dni" type="number" value="{{$user->dni}}"/>
        <p>CUIT: <input name="cuit" type="number" value="{{$user->cuit}}"/>
        <p>Sexo: <input name="gender" type="text" value="{{$user->gender}}"/>
        <p>Nacionalidad: <input name="nationality" type="" value="{{$user->nationality}}"/>
        <p>Localidad: <input name="localidad_id" type="" value="{{$user->localidad_id}}"/>
        <p><input type="submit" value="Enviar cambios"/>
                
    </form>
    <form method="POST" action="users/{{$user->id}}">
        {{ method_field('DELETE')}}
        {{ csrf_field() }}
        <p><input class="input_warning" type="submit" value="Eliminar usuario!"/></p>
    </form>
    
@endsection
<!--
  $table->bigIncrements('id');
            $table->string('dni')->unique();
            $table->string('phone')->default("");;
            $table->string('photo_url')->default("noPhoto.png");
            $table->bigInteger('cuit')->unique();
            $table->string('gender')->default("");;
            $table->string('nationality')->default("AR");;
            $table->integer('localidad_id')->default(0);;
            $table->integer('cv_id')->default(0);;
            $table->integer('user_class_id')->default(1);;
            $table->rememberToken();
            $table->timestamps();
        });
-->