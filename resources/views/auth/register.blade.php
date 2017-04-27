@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading"><strong><i class="fa fa-user-plus" aria-hidden="true"></i>
Registre-se</strong></div>
                <div class="panel-body">
                    <form role="form" method="POST" enctype="multipart/form-data" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="col-md-8">
                          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Nome:</label>
                                <input id="name" type="text" class="form-control" name="name" maxlength="150" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>


                        <div class="col-md-4">
                          <div class="form-group{{ $errors->has('apelido') ? ' has-error' : '' }}">
                            <label for="name">Apelido:</label>
                                <input id="apelido" type="text" class="form-control" name="apelido" maxlength="60" value="{{ old('apelido') }}" required>

                                @if ($errors->has('apelido'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apelido') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>



                        <div class="col-md-6">
                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="name">E-mail:</label>
                                <input id="email" type="text" class="form-control" name="email" maxlength="150" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>


                        <div class="col-md-6">
                          <div class="form-group{{ $errors->has('git') ? ' has-error' : '' }}">
                            <label for="name">Github:</label>
                                <input id="git" type="text" class="form-control" name="git" maxlength="150" value="{{ old('git') }}">

                                @if ($errors->has('git'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('git') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>


                        <div class="col-md-6">
                          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="name">Senha:</label>
                                <input id="password" type="password"  class="form-control" name="password" maxlength="100" value="{{ old('password') }}" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="password-confirm">Confirme sua Senha:</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="foto">Avatar/Foto:</label>
                                <input id="foto" type="file" class="form-control" name="foto" required="required">
                            </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group{{ $errors->has('cidade') ? ' has-error' : '' }}">
                            <label for="name">Cidade:</label>
                                <input id="cidade" type="text" class="form-control" name="cidade" maxlength="80" value="{{ old('cidade') }}" required>

                                @if ($errors->has('cidade'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cidade') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>

                        <div class="col-md-2">
                          <div class="form-group{{ $errors->has('estado') ? ' has-error' : '' }}">
                            <label for="name">Estado:</label>
                                <input id="estado" type="text" class="form-control" name="estado" maxlength="60" value="{{ old('estado') }}" required>

                                @if ($errors->has('estado'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('estado') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>

                        <div class="col-md-12">
                          <div class="form-group{{ $errors->has('cidade') ? ' has-error' : '' }}">
                            <label for="name">Biografia:</label>
                                <textarea class="form-control" name="biografia" id="biografia" cols="10" maxlength="250" rows="4"></textarea>
                          </div>
                        </div>

                        
                        <div class="col-xs-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>
Salvar</button>
                                <a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
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
