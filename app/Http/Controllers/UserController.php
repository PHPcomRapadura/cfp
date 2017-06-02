<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserFormRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Sexo;
use App\Tpalimentacao;
use Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

     $user = User::find($id);
     $sex = Sexo::all()->pluck('descricao','id');

        return view('user.show')
             ->with(compact('user','sex'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $id = Auth::user()->id;
      $user = User::find($id);
      $sex = Sexo::all()->pluck('descricao','id');
      $aliment = Tpalimentacao::all()->pluck('descricao','descricao');

        return view('user.edit')
             ->with(compact('user','sex','aliment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\UserFormRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserFormRequest $request, $id)
    {
        $user = User::find($id);

        if(isset($request['foto']))
        {
            $destinationPath = 'uploads';
            $arquivo = Input::file('foto');
            $arquivo->move($destinationPath, $arquivo->getClientOriginalName());
            $user->foto = $arquivo->getClientOriginalName();
        }

        if($request['password'] != "" && $request['password_confirmation'] != "")
        {   
            $user->password = Hash::make($request['password']);

            $user->fill($request->only('name','apelido','email','git','cidade','estado','biografia','sexo_id','alimentacao','aeroporto'))
                 ->save();
        }else{

            $user->fill($request->only('name','apelido','email','git','cidade','estado','biografia','sexo_id','alimentacao','aeroporto'))
                 ->save();    
        }

        return redirect()
               ->route('user.edit', $id)
               ->with(['success'=> 'Dados alterados com sucesso!']);
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
