@extends('layouts.app')

@section('content')

<div class="container">

<!-- mensagens de error -->
@if(count($errors->all()) > 0)
<div class="alert alert-danger col-md-8 col-md-offset-2">
    <ul>
        @foreach($errors->all() as $error)
        <li><i class="fa fa-hand-paper-o" aria-hidden="true"></i> {{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-danger">
                <div class="panel-heading" id="cor-padrao"><strong><i class="fa fa-user-plus" aria-hidden="true"></i>
Registre-se</strong></div>
                <div class="panel-body">
                    <form role="form" method="POST" enctype="multipart/form-data" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="col-md-8">
                          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Nome:</label>
                                <input id="name" placeholder="Digite o nome completo minha jóia" type="text" class="form-control" name="name" maxlength="150" value="{{ old('name') }}" required autofocus>
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group{{ $errors->has('apelido') ? ' has-error' : '' }}">
                            <label for="name">Apelido:</label>
                                <input id="apelido" placeholder="Só um apelidozim" type="text" class="form-control" name="apelido" maxlength="60" value="{{ old('apelido') }}" required>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="name">E-mail:</label>
                                <input id="email" type="text" placeholder="Aqui coise o email" class="form-control" name="email" maxlength="150" value="{{ old('email') }}" required>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group{{ $errors->has('git') ? ' has-error' : '' }}">
                            <label for="name">Github:</label>
                                <input id="git" type="text" placeholder="Apenas o nickname" class="form-control" name="git" maxlength="150" value="{{ old('git') }}">
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="name">Senha:</label>
                                <input id="password" type="password" placeholder="Cuidado, usamos md5 kkkkk" class="form-control" name="password" maxlength="100" value="{{ old('password') }}" required>
                          </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="password-confirm">Confirme sua Senha:</label>
                                <input id="password-confirm" type="password" placeholder="Só pra ter certeza" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="foto">Retrato: </label>
                                <input id="foto" type="file" class="form-control" title="Tamanho min: 200px e max:400px" name="foto" required="required">
                            </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group{{ $errors->has('cidade') ? ' has-error' : '' }}">
                            <label for="name">Cidade:</label>
                                <input id="cidade" placeholder="Cidade de onde vem" type="text" class="form-control" name="cidade" maxlength="80" value="{{ old('cidade') }}" required>
                          </div>
                        </div>

                        <div class="col-md-2">
                          <div class="form-group{{ $errors->has('estado') ? ' has-error' : '' }}">
                            <label for="name">Estado:</label>
                                <input id="estado" placeholder="Só a sigla" type="text" class="form-control" name="estado" maxlength="60" value="{{ old('estado') }}" required>
                          </div>
                        </div>

                        <div class="col-md-12">
                          <div class="form-group{{ $errors->has('cidade') ? ' has-error' : '' }}">
                            <label for="name">Biografia:</label>
                                <textarea placeholder="Conte-nos mais sobre você :)" class="form-control" name="biografia" id="biografia" cols="10" maxlength="250" rows="4"></textarea>
                          </div>
                        </div>

                        
                        <div class="col-xs-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>
Salvar</button>
                                <a href="javascript:history.back()" class="btn btn-warning"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection