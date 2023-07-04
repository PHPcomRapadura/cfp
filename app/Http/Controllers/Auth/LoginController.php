<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Auth;
use App\Rules\ReCaptcha;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware(['guest', 'permissions'], ['except' => 'logout']);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function login(Request $request)
    {
        $this->validator($request->all())->validate();

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
  
            return redirect()->route('/home');
        }
    
        return redirect("login")->with(['error'=> 'Usuário ou senha inválidos!']);
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
            [
                'email' => 'required',
                'password' => 'required',
                'g-recaptcha-response' => ['required', new ReCaptcha]
            ],

            ['required' => 'O campo :attribute é obrigatório'],

            [ 
              'email' => 'Email', 
              'password' => 'Senha',
              'g-recaptcha-response' => 'Recaptcha'
            ]
        );
    }
}
