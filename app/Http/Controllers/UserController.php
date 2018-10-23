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
use Storage;


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
        $user    = User::find($id);
        $sex     = Sexo::all()->pluck('descricao','id');
        $aliment = Tpalimentacao::all()->pluck('descricao','descricao');

        return view('user.show')
            ->with(compact('user', 'sex', 'aliment'));
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

        // Upload da imagem
        $uploaded = $this->upload($request, $user->foto);
            

        if (!empty($request->password) && !empty($request->password_confirmation)) {
            $user->password = Hash::make($request->password);
        }

        $user->fill($request->except(['_method', '_token', 'password', 'password_confirmation']));

        if($uploaded !== false){
            $user->foto = $uploaded;
        }
        
        $user->save();

        return redirect()
            ->route('user.edit', $id)
            ->with(['success'=> 'Dados alterados com sucesso!']);
    }

    /**
     * Upload de arquivo
     * @param  Request  $request
     * @param  string   $oldFile
     * @return string|boolean
     */
    protected function upload(Request $request, $oldFile = null)
    {
        if (!$request->hasFile('foto')) {
            return false;
        }

        $file             = $request->file('foto');
        $extensao         = $file->extension();
        $file_name        = $request->git.'.'.$extensao;
        $destination_path = $file->move(public_path('uploads'), $file_name);

        if (!$destination_path) {
            return false;
        }

        return $file_name;
    }
}
