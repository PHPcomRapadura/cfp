@extends('layouts.app')

@section('content')
    <div class="container container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading"><strong>Seja bem-vindo Sr.(a) {{ Auth::user()->apelido }}</strong></div>
                    <div class="panel-body">
                        @can('talks-create')
                            <div class="col-md-6">
                                <div class="thumbnail text-center">
                                    <img src="{{URL::asset('/img/talks.jpg')}}" alt="Talk">
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

                        @can('talks-view')
                            <div class="col-md-6">
                                <div class="thumbnail text-center">
                                    <img src="{{URL::asset('/img/talks.jpg')}}" alt="Talk">
                                    <div class="caption">
                                        <h4>
                                            <strong>
                                                <i class="fa fa-microphone" aria-hidden="true"></i>
                                                Visualizar Paslestras Submetidas
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

                            @can('users-update')
                        <div class="col-md-6">

                            <div class="thumbnail text-center">

                                <img src="{{URL::asset('/img/user.jpg')}}" alt="Perfil">

                                <div class="caption">
                                    <h4><strong><i class="fa fa-edit" aria-hidden="true"></i> Editar seu perfil</strong>
                                    </h4>
                                    <p><a href="{{ route('user.edit', Auth::user()->id) }}"
                                          class="btn btn-primary btn-sm" role="button"><i class="fa fa-sign-in"
                                                                                          aria-hidden="true"></i>
                                            Acessar</a></p>
                                </div>
                            </div>
                        </div>
                        @endcan

                        @can('events-view')
                        <div class="col-md-6">

                            <div class="thumbnail text-center">

                                <img src="{{URL::asset('/img/evento.jpg')}}" alt="Eventos">

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
