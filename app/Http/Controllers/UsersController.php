<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.create');
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
        $validated = $request->validate([
           'name'=>['required'],
            'last_name'=>['required'],
            'email'=>['required','email'],
            'home_address'=>['required'],
            'phone'=>['digits_between:7,25'],
            'dni'=>['digits_between:7,25'],
            'cuit'=>['digits_between:10,25'],
            'gender'=>['required', 'max:1'],
            'localidad_id'=>['digits_between:1,3'],
        ]);
//        $user->name=$request->name;
//        $user->last_name = $request->last_name;
//        $user->email=$request->email;
//        $user->home_address=$request->home_address;
//        $user->phone=$request->phone;
//        $user->dni=$request->dni;
//        $user->cuit=$request->cuit;
//        $user->gender=$request->gender;
//        $user->nationality=$request->nationality;
//        $user->localidad_id=$request->localidad_id;
//        $user->save();
        //return $validated;
        User::create($validated);
        return redirect('/users');

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        //$u = User::find($user);
        return view('users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $user->name=$request->name;
        $user->last_name = $request->last_name;
        $user->email=$request->email;
        $user->home_address=$request->home_address;
        $user->phone=$request->phone;
        $user->dni=$request->dni;
        $user->cuit=$request->cuit;
        $user->gender=$request->gender;
        $user->nationality=$request->nationality;
        $user->localidad_id=$request->localidad_id;
        $user->save();
        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
