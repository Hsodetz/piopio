<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\Provincia;
use App\City;
use Caffeinated\Shinobi\Models\Role; //Hacemos uso para usar Role::

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        $provincias = Provincia::orderBy('name', 'ASC')->get();
        $cities     = City::orderBy('name', 'ASC')->get();
        $roles      = Role::orderBy('name', 'ASC')->get();
        return view('auth.register', compact('provincias', 'cities', 'roles'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'                      => 'required|string|max:255',
            'last_name'                 => 'required|string|max:255',
            'age'                       => 'required|integer|min:1,max:3',
            'email'                     => 'required|string|email|max:255|unique:users',
            'password'                  => 'required|string|min:6|confirmed',
            'identification_document'   => 'required|string|min:4',
            'province'                  => 'required|string',
            'city'                      => 'required|string',
            'address'                   => 'required|min:4',
            'phone_movil'               => 'required|min:4',
            'phone_house'               => 'required|min:4',
            'sexo'                      => 'required',
            'nationality'               => 'required|min:4',
            'occupation'                => 'required',
            'civil_status'              => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name'                      => $data['name'],
            'last_name'                 => $data['last_name'],
            'age'                       => $data['age'],
            'email'                     => $data['email'],
            'password'                  => bcrypt($data['password']),
            'identification_document'   => $data['identification_document'],
            'province'                  => $data['province'],
            'city'                      => $data['city'],
            'address'                   => $data['address'],
            'phone_movil'               => $data['phone_movil'],
            'phone_house'               => $data['phone_house'],
            'sexo'                      => $data['sexo'],
            'nationality'               => $data['nationality'],
            'occupation'                => $data['occupation'],
            'civil_status'              => $data['civil_status'],
        ]);
        
    }
}
