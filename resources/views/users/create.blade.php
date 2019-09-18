@extends('layout')
@section('content')
    <h1>Crear usuario</h1>
    <form method="POST" action="/users" class="curriculumform">
        {{ csrf_field() }}
        <p>Nombre: <input name="name" required  {{$errors->name ? "class='curriculumform_warning'" : "" }} value="{{old('name')}}"/> Apellido: <input name="last_name" value="{{old('last_name')}}"/>
        <p>Email: <input required name="email" type="email" value="{{old('email')}}"/>
        <p>Contraseña: <input required type="password" value="{{old('password')}}"/>
        <p>Domicilio: <input name="home_address" type="" value="{{old('home_address')}}"/>
            Telefono: <input type="tel" name="phone" value="{{old('phone')}}"/>
        <p>DNI: <input required name="dni" type="number" value="{{old('dni')}}"/>
        <p>CUIT: <input required name="cuit" type="number" value="{{old('cuit')}}"/>
        <p>Sexo: <input name="gender" type="text" value="{{old('gender')}}"/>
        <p>Nacionalidad: <input name="nationality" type="" value="{{old('nationality')}}"/>
        <p>Localidad: <input name="localidad_id" type="" value="{{old('localidad_id')}}"/>
        <p><input type="submit" value="Enviar cambios"/>
                
    </form>
    <div style="background: red;display:{{$errors->any() ? "block" : "none" }}">
        <p>Ha ocurrido un error: {{($errors)}}</p>
    </div>
@endsection
<!--
    $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->default("cambiame");
            $table->string('last_name')->default("");
            $table->string('dni')->unique();
            $table->string('phone')->default("");;
            $table->string('photo_url')->default("noPhoto.png");
            $table->string('home_address')->default("");;
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