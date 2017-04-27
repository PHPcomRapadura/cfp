@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading"><strong>Seja bem-vindo Sr.(a) {{ Auth::user()->apelido }}</strong></div>

                <div class="panel-body">
                    
    @can('Talk')
        <div class="col-md-4">

            <div class="thumbnail text-center">

                <img src="{{URL::asset('/img/talks.jpg')}}" alt="Talk">     
              
                    <div class="caption">
                        <h4><strong><i class="fa fa-microphone" aria-hidden="true"></i> Submeta a sua palestra</strong></h4>
                       <p><a href="{{ url('/') }}" class="btn btn-primary btn-sm" role="button"><i class="fa fa-sign-in" aria-hidden="true"></i> Acessar</a></p>
                    </div>
            </div>
        </div>
    @endcan    

    @can('Perfil')
        <div class="col-md-4">

            <div class="thumbnail text-center">

                <img src="{{URL::asset('/img/user.jpg')}}" alt="Perfil">     
              
                    <div class="caption">
                        <h4><strong><i class="fa fa-edit" aria-hidden="true"></i> Editar seu perfil</strong></h4>
                        <p><a href="{{ url('/') }}" class="btn btn-primary btn-sm" role="button"><i class="fa fa-sign-in" aria-hidden="true"></i> Acessar</a></p>
                    </div>
            </div>
        </div>
    @endcan

    @can('Event')
        <div class="col-md-4">

            <div class="thumbnail text-center">

                <img src="{{URL::asset('/img/evento.jpg')}}" alt="Eventos">     
              
                    <div class="caption">
                        <h4><strong><i class="fa fa-users" aria-hidden="true"></i> Controle de Eventos</strong></h4>
                        <p><a href="{{ url('/event') }}" class="btn btn-primary btn-sm" role="button"><i class="fa fa-sign-in" aria-hidden="true"></i> Acessar</a></p>
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
