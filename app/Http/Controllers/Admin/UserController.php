<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use RealRashid\SweetAlert\Facades\Alert;
use Caffeinated\Shinobi\Models\Role; //Hacemos uso para usar Role::
use App\User;
use App\Provincia;
use App\City;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->paginate(10);
        $roles = Role::all();
        
        return view('admin.users.index', compact('users', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        //dd($user->roles);
        $roles = $user->roles;
        return view('admin.users.show', compact('user', 'roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $provinces = Provincia::orderBy('name', 'ASC')->pluck('name', 'id');
        $cities = City::orderBy('name', 'ASC')->pluck('name', 'id');
        $roles = Role::get();
        return view('admin.users.edit', compact('user', 'provinces', 'cities', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        
        //Primero que se actualice el usuario
        $user->update($request->all());
        //Luego que se actualicen los roles, sincronizamos los datos que pasamos con el campo roles
        $user->roles()->sync($request->get('roles'));
        
        Alert::toast('Usuario actualizado satisfactoriamente!', 'success', 'top-right')->autoclose(8000);
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
