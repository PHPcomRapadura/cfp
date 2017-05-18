@extends('layouts.app') 

@section('content')

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

<!-- mensagens de sucesso -->
@if(Session::has('success'))

<div class="alert alert-success col-md-8 col-md-offset-2">
	<i class="fa fa-check-circle-o" aria-hidden="true"></i>
	{{Session::get('success')}}
</div>
@endif

@can('Event')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<strong><i class="fa fa-users" aria-hidden="true"></i> Gerenciar Talks</strong> 
					  
				</div>
				
				<div class="panel-body">

				{!! Form::open(['route' => ['talk.all'], 'method' => 'GET']) !!}
										
						@include('talk.partial.pform')

                {!! Form::close() !!}
                    
 				</div>
			</div>
		</div>
	</div>
	@if(isset($talks))	
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<strong><i class="fa fa-list-alt" aria-hidden="true"></i> Listagem de talks enviadas</strong> 
				</div>
				
				<div class="panel-body">
 			
					<div class="table-responsive">

						<table class="table table-hover table-responsive table-bordered table-striped">
							<tr class="active">
							    <th>Emissão</th>
								<th>Apelido</th>
								<th class="text-center">Palestra</th>
								<th colspan="2" class="text-center">Ação</th>
							</tr>
							@foreach ($talks as $tk)
							<tr>
								<td class="text-center">{{ $tk->create_at}}</td>
								<td>{{ $tk->user->name }}</td>
								<td class="text-center">{{ $tk->title}}</td>
								
								<td class="text-center"><a class="btn btn-warning btn-sm"
									href="{{ route('user.show',$tk->id) }}"> Editar</a>
								</td>
								
								<td class="text-center"><a class="btn btn-warning btn-sm"
									href="{{ route('talk.show',$tk->id) }}"> Editar</a>
								</td>
							
							</tr>
							@endforeach
						</table>
						
						{!! $talks->render() !!}

					</div>
			
				</div>
			</div>
		</div>
	</div>
 @endif	
</div>
@endcan
@endsection