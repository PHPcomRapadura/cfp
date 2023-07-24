@extends('layouts.app') 

@section('content')

<div class="container">

@if(count($errors->all()) > 0)
<div class="alert alert-danger col-md-8 col-md-offset-2">
	<ul>
		@foreach($errors->all() as $error)
		<li><i class="fa fa-hand-paper-o" aria-hidden="true"></i> {{$error}}</li>
		@endforeach
	</ul>
</div>
@endif

<!-- mensagens de sucesso -->
@if(Session::has('success'))

<div class="alert alert-success col-md-8 col-md-offset-2">
	<i class="fa fa-check-circle-o" aria-hidden="true"></i>
	{{Session::get('success')}}
</div>
@endif

@can('talks-all')

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-danger">
				<div class="panel-heading" id="cor-padrao">
					<strong><i class="fa fa-microphone" aria-hidden="true"></i> Gerenciar Talks</strong> 
					  
				</div>
				
				<div class="panel-body">

				{!! Form::open(['url' => route('talk.search')]) !!}
										
						@include('talk.partial.pform')

                {!! Form::close() !!}
                    
 				</div>
			</div>
		</div>
	</div>
	@if(isset($talks))	
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-danger">
				<div class="panel-heading" id="cor-padrao">
					<strong><i class="fa fa-list-alt" aria-hidden="true"></i> Listagem de talks enviadas</strong> 
				</div>
				
				<div class="panel-body">
 			
					<div class="table-responsive">

						<table class="table table-hover table-responsive table-bordered table-striped">
							<tr class="active">
								<th>#</th>
							    <th>Enviada em</th>
								<th>Palestrante</th>
								<th>Vulgo</th>
								<th>Donde vem?</th>
								<th>Tema</th>
								<th colspan="2" class="text-center">Visualizar</th>
							</tr>
							@foreach ($talks as $tk)
							<tr>
								<th scope="row">{{ $loop->iteration }}</th>
								<td>{{ date('d/m/Y H:i:s', strtotime($tk->created_at))}}</td>
								<td>{{ $tk->user->name }}</td>
								<td>{{ $tk->user->apelido }}</td>
								<td>{{ $tk->user->cidade }} - {{ $tk->user->estado }}</td>
								<td>{{ $tk->titulo}}</td>
								
								<td class="text-center"><a class="btn btn-warning btn-sm"
									href="{{ route('user.show',$tk->user->id) }}"><i class="fa fa-search" aria-hidden="true"></i> Perfil</a>
								</td>
								
								<td class="text-center"><a class="btn btn-success btn-sm"
									href="{{ route('talk.show',$tk->id) }}"><i class="fa fa-search" aria-hidden="true"></i> Talk</a>
								</td>
							
							</tr>
							@endforeach
						</table>
			

					</div>
			
				</div>
			</div>
		</div>
	</div>
 @endif	
</div>
@endcan
@endsection