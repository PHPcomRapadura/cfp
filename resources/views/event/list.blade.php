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

@can('events-view')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<strong><i class="fa fa-users" aria-hidden="true"></i> Gerenciar Eventos</strong> 
					  <span class="pull-right"><a class="btn btn-success btn-sm" href="{{ route('event.create') }}"> <strong><i
						    class="fa fa-plus" aria-hidden="true"></i> Incluir</strong></a></span>
				</div>
				
				<div class="panel-body">

				{!! Form::open(['url' => route('event.search')]) !!}
										
						@include('event.partial.pform')

                {!! Form::close() !!}
                    
 				</div>
			</div>
		</div>
	</div>
	@if(isset($events))	
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<strong><i class="fa fa-list-alt" aria-hidden="true"></i> Listagem de eventos</strong> 
				</div>
				
				<div class="panel-body">
 			
					<div class="table-responsive">

						<table class="table table-hover table-responsive table-bordered table-striped">
							<tr class="active">
								<th>Nome</th>
								<th class="text-center">Início</th>
								<th class="text-center">Fim</th>
								<th class="text-center">Encerramento CFP</th>
								<th colspan="2" class="text-center">Ação</th>
							</tr>
							@foreach ($events as $ev)
							<tr>
								<td>{{ $ev->name}}</td>
								<td class="text-center">{{ $ev->present()->datainicial}}</td>
								<td class="text-center">{{ $ev->present()->datafinal}}</td>
								<td class="text-center">{{ $ev->present()->datafimdocfp}}</td>
								<td class="text-center"><a class="btn btn-warning btn-sm"
									href="{{ route('event.edit',$ev->id) }}"> Editar</a></td>
								<td class="text-center">
								 {{ Form::open(array('url' => 'event/'.$ev->id, 'class' =>'text-center')) }} 
									{{ Form::hidden('_method', 'DELETE') }} 
									{{ Form::submit('Excluir', array('class' => 'btn btn-danger btn-sm')) }} 
								 {{ Form::close() }}
								</td>
							</tr>
							@endforeach
						</table>
						
						{!! $events->render() !!}

					</div>
			
				</div>
			</div>
		</div>
	</div>
 @endif	
</div>
@endcan
@endsection