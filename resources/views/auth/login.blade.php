@extends('layouts.app')

@section('content')

<script src='https://www.google.com/recaptcha/api.js'></script>

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

    @if(Session::has('error'))

<div class="alert alert-danger col-md-8 col-md-offset-2">
<i class="fa fa-hand-paper-o" aria-hidden="true"></i>
	{{Session::get('error')}}
</div>
@endif

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-danger">
                <div class="panel-heading" id="cor-padrao"><strong><i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        Autenticação de Usuários</strong></div>
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="col-md-12">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="name">E-mail:</label>
                                <input id="email" placeholder="Email" type="text" class="form-control" name="email" maxlength="150" value="{{ old('email') }}" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="name">Senha:</label>
                                <input id="password" placeholder="Senha" type="password" class="form-control" name="password" maxlength="100" value="{{ old('password') }}" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                                @if ($errors->has('g-recaptcha-response'))
                                <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Lembrar
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    <strong><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                        Acessar</strong>
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Esqueceu sua senha?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection