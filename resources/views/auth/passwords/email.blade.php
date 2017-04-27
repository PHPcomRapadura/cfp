@extends('layouts.app')

<!-- Main Content -->
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading"><strong><i class="fa fa-refresh" aria-hidden="true"></i>
Recuperar Senha</strong></div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}

                    <div class="col-md-12">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">E-mail:</label>

                                <input id="email" type="email" class="form-control" maxlength="150" placeholder="Digite o seu email" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                    <div class="col-xs-12">
                        <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Enviar link de recuperação de senha
                                </button>

                             <a href="{{ url('/login') }}" class="btn btn-warning"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
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
