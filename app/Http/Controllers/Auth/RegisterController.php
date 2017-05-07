<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use App\Role_User;

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

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:150',
            'apelido' => 'required|max:60',
            'git' => 'max:150',
            'email' => 'required|email|max:150|unique:users',
            'password' => 'required|min:6|confirmed',
            'foto' => 'required|image|mimes:jpg,png|dimensions:min_width=200,max_width=400,min_height=200,max_height=400',
            'cidade' => 'required|max:80',
            'estado' => 'required|max:60',
            'biografia' => 'required|max:250',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $destinationPath = 'uploads';
        $arquivo = Input::file('foto');
        $arquivo->move($destinationPath, $arquivo->getClientOriginalName());

        $name_file = $arquivo->getClientOriginalName();
       
        return User::create([
            'name' => $data['name'],
            'apelido' => $data['apelido'],
            'email' => $data['email'],
            'git' => $data['git'],
            'foto' => $name_file,
            'cidade' => $data['cidade'],
            'estado' => $data['estado'],
            'biografia' => $data['biografia'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
