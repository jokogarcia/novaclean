@extends('layout')
@section('content')
    <h1>Crear usuario</h1>
    <form method="POST" action="/users" class="curriculumform">
        {{ csrf_field() }}
        <p>Nombre: <input name="name" required class="curriculumform @error('name') input_warning @enderror" value="{{old('name')}}"/>
           Apellido: <input class="curriculumform @error('last_name') input_warning @enderror"  name="last_name" value="{{old('last_name')}}"/>
        <p>Email: <input class="curriculumform @error('email') input_warning @enderror"  required name="email" type="email" value="{{old('email')}}"/>
        <p>Contraseña: <input class="curriculumform @error('password') input_warning @enderror" required type="password" value="{{old('password')}}"/>
        <p>Domicilio: <input class="curriculumform @error('home_address') input_warning @enderror"  name="home_address" type="" value="{{old('home_address')}}"/>
            Telefono: <input tclass="curriculumform @error('phone') input_warning @enderror"  ype="tel" name="phone" value="{{old('phone')}}"/>
        <p>DNI: <input class="curriculumform @error('dni') input_warning @enderror"  required name="dni" type="number" value="{{old('dni')}}"/>
        <p>CUIT: <input class="curriculumform @error('cuit') input_warning @enderror"  required name="cuit" type="number" value="{{old('cuit')}}"/>
        <p>Sexo: <input class="curriculumform @error('gender') input_warning @enderror"  name="gender" type="text" value="{{old('gender')}}"/>
        <p>Nacionalidad: <input class="curriculumform @error('nationality') input_warning @enderror"  name="nationality" type="" value="{{old('nationality')}}"/>
        <p>Localidad: <input class="curriculumform @error('localidad_id') input_warning @enderror"  name="localidad_id" type="" value="{{old('localidad_id')}}"/>
        <p><input type="submit" value="Enviar cambios"/>
                
    </form>
    <div style="background: red;display:{{$errors->any() ? "block" : "none" }}">
        <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
        <p>Ha ocurrido un error:  {{$errors->name ? "class='curriculumform_warning'" : "cue" }}</p>
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