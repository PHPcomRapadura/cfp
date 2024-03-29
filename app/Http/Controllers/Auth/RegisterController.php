<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Role_User;
use Storage;
use App\Rules\ReCaptcha;

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
        return Validator::make($data, 
            ['name' => 'required|max:150',
             'apelido' => 'required|max:60',
             'git' => 'max:150',
             'email' => 'required|email|max:150|unique:users',
             'password' => 'required|min:6|confirmed',
             'foto' => 'required|image|mimes:jpg,png,jpeg',
             'cidade' => 'required|max:80',
             'estado' => 'required|max:60',
             'biografia' => 'required|max:1250',
             'g-recaptcha-response' => ['required', new ReCaptcha]
            ],

            ['required' => 'O campo :attribute é obrigatório'],

            [ 'name' => 'Nome', 
              'apelido' => 'Apelido',
              'git' => 'Github',
              'email' => 'Email',
              'foto' => 'Avatar/Foto',
              'cidade' => 'Cidade',
              'estado' => 'Estado',
              'biografia' => 'biografia',
              'g-recaptcha-response' => 'Recaptcha'
              ]
        );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        // Upload da imagem
        $uploaded = $this->upload($data);

        return User::create([
            'name' => $data['name'],
            'apelido' => $data['apelido'],
            'email' => $data['email'],
            'git' => $data['git'],
            'foto' => $uploaded,
            'cidade' => $data['cidade'],
            'estado' => $data['estado'],
            'biografia' => $data['biografia'],
            'sexo_id' => 1,
            'alimentacao' => '',
            'aeroporto' => '',
            'password' => bcrypt($data['password']),
        ]);
    }

     /**
     * Upload de arquivo
     * @param  Request  $request
     * @param  string   $oldFile
     * @return string|boolean
     */
    protected function upload($data)
    {
        $file             = $data['foto'];
        $extensao         = $file->extension();
        $file_name        = $data['git'].'.'.$extensao;
        $destination_path = $file->move(public_path('uploads'), $file_name);

        if (!$destination_path) {
            return false;
        }

        return $file_name;
    }

     /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $user_id = User::max('id');

        $role_user = new Role_User;
        $role_user->user_id = $user_id;
        $role_user->role_id = 3;

        $role_user->save();

        $this->guard()->login($user);

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }

}
