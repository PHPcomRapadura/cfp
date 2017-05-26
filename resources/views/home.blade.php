@extends('layouts.app')

@section('content')
    <div class="container container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading" id="cor-padrao"><strong>Seja bem-vindo Sr.(a) {{ Auth::user()->apelido }}</strong></div>
                    <div class="panel-body">

                    @if(empty(Auth::user()->aeroporto)|| empty(Auth::user()->sexo_id)|| empty(Auth::user()->alimentacao))
                         <div class="col-md-12">
                            <div class="alert alert-danger col-md-8 col-md-offset-2">
                            <ul>
                                <li><i class="fa fa-hand-paper-o" aria-hidden="true"></i> Há dados no seu perfil que precisam ser preenchidos!</li>
                            </ul>
                        </div>
                         </div>
                    @endif

                        @can('talks-view')
                            <div class="col-md-6">
                                <div class="thumbnail text-center">
                                    <img src="{{URL::asset('/img/user-talk.png')}}" alt="Talk">
                                    <div class="caption">
                                        <h4>
                                            <strong>
                                                <i class="fa fa-microphone" aria-hidden="true"></i>
                                                Submeta a sua palestra
                                            </strong>
                                        </h4>
                                        <p>
                                            <a href="{{ url('/talk') }}" class="btn btn-primary btn-sm" role="button">
                                                <i class="fa fa-sign-in" aria-hidden="true"></i> Acessar
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endcan

                        @can('talks-all')
                            <div class="col-md-4">
                                <div class="thumbnail text-center">
                                    <img src="{{URL::asset('/img/talks-various.jpg')}}" alt="Talk">
                                    <div class="caption">
                                        <h4>
                                            <strong>
                                                <i class="fa fa-microphone" aria-hidden="true"></i>
                                                Visualizar Paslestras Submetidas
                                            </strong>
                                        </h4>
                                        <p>
                                            <a href="{{ url('/talks') }}" class="btn btn-primary btn-sm" role="button">
                                                <i class="fa fa-sign-in" aria-hidden="true"></i> Acessar
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endcan

                    @can('users-update')
                        <div class="col-md-6">

                            <div class="thumbnail text-center">

                                <img src="{{URL::asset('/img/user-1.jpg')}}" alt="Perfil">

                                <div class="caption">
                                    <h4><strong><i class="fa fa-edit" aria-hidden="true"></i> Editar seu perfil</strong>
                                    </h4>
                                    <p><a href="{{ route('user.edit', Auth::user()->id) }}"
                                          class="btn btn-primary btn-sm" role="button"><i class="fa fa-sign-in" aria-hidden="true"></i> Acessar</a></p>
                                </div>
                            </div>
                        </div>
                        @endcan

                        @can('users-view')
                        <div class="col-md-4">

                            <div class="thumbnail text-center">

                                <img src="{{URL::asset('/img/users-2-icon.png')}}" alt="Perfil">

                                <div class="caption">
                                    <h4><strong><i class="fa fa-edit" aria-hidden="true"></i> Visualizar perfis dos palestrantes</strong>
                                    </h4>
                                    <p><a href="{{ route('user.index') }}"
                                          class="btn btn-primary btn-sm" role="button"><i class="fa fa-sign-in" aria-hidden="true"></i> Acessar</a></p>
                                </div>
                            </div>
                        </div>
                        @endcan

                        @can('events-view')
                        <div class="col-md-4">

                            <div class="thumbnail text-center">

                                <img src="{{URL::asset('/img/events-1.png')}}" alt="Eventos">

                                <div class="caption">
                                    <h4><strong><i class="fa fa-users" aria-hidden="true"></i> Controle de
                                            Eventos</strong></h4>
                                    <p><a href="{{ url('/event') }}" class="btn btn-primary btn-sm" role="button"><i
                                                    class="fa fa-sign-in" aria-hidden="true"></i> Acessar</a></p>
                                </div>
                            </div>
                        </div>
                        @endcan

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
