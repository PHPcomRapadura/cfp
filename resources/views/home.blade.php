@extends('layouts.app')

@section('content')
    <div class="container container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-danger">
                    <div class="panel-heading" id="cor-padrao">
                        <strong>Seja bem-vindo Sr.(a) {{ Auth::user()->apelido }}</strong>
                    </div>
                    <div class="panel-body">

                        <div class="row">
                            @can('talks-all')
                                <div class="col-md-4">
                                    <div class="thumbnail text-center">
                                        <i class="fa fa-comments fa-5x"></i>
                                        <div class="caption">
                                            <h4><strong>Palestras submetidas</strong></h4>
                                            <p>
                                                <a href="{{ route('talks.all') }}" class="btn btn-primary" role="button">
                                                    <i class="fa fa-sign-in" aria-hidden="true"></i> Acessar
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endcan

                            @can('events-view')
                                <div class="col-md-4">
                                    <div class="thumbnail text-center">
                                        <i class="fa fa-calendar fa-5x"></i>
                                        <div class="caption">
                                            <h4><strong>Controle de Eventos</strong></h4>
                                            <p>
                                                <a href="{{ route('event.index') }}" class="btn btn-primary" role="button">
                                                    <i class="fa fa-sign-in" aria-hidden="true"></i> Acessar
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endcan

                            @can('users-view')
                                <div class="col-md-4">
                                    <div class="thumbnail text-center">
                                        <i class="fa fa-users fa-5x"></i>
                                        <div class="caption">
                                            <h4><strong>Visualizar palestrantes</strong></h4>
                                            <p>
                                                <a href="{{ route('user.index') }}" class="btn btn-primary" role="button">
                                                    <i class="fa fa-sign-in" aria-hidden="true"></i> Acessar
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endcan
                        </div>

                        <div class="row">
                            @can('talks-create')
                                <div class="col-md-4">
                                    <div class="thumbnail text-center">
                                        <i class="fa fa-microphone fa-5x"></i>
                                        <div class="caption">
                                            <h4><strong>Submeta sua palestra</strong></h4>
                                            <p>
                                                <a href="{{ route('talk.create') }}" class="btn btn-primary" role="button">
                                                    <i class="fa fa-sign-in" aria-hidden="true"></i> Acessar
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endcan

                            @can('users-update')
                                <div class="col-md-4">
                                    <div class="thumbnail text-center">
                                        @if (Storage::exists('public/uploads/' . Auth::user()->foto))
                                            <img class="img-responsive img-circle" width="70" src="{{ asset('storage/uploads/' . Auth::user()->foto) }}">
                                        @endif
                                        <div class="caption">
                                            <h4><strong>Edite seu perfil</strong></h4>
                                            <p>
                                                <a href="{{ route('user.edit', Auth::user()->id) }}" class="btn btn-primary" role="button">
                                                    <i class="fa fa-sign-in" aria-hidden="true"></i> Editar
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endcan
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
