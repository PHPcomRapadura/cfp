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

@can('talks-create')

	@if(isset($talks))	
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading" id="cor-padrao">
					<strong><i class="fa fa-microphone" aria-hidden="true"></i> Controle de palestras</strong><span class="pull-right"><a class="btn btn-success btn-sm" href="{{ route('talk.create') }}"> <strong><i
						    class="fa fa-plus" aria-hidden="true"></i> Incluir</strong></a></span>
				</div>
				
				<div class="panel-body">
 			
					<div class="table-responsive">

						<table class="table table-hover table-responsive table-bordered table-striped">
							<tr class="active">
								<th>Evento</th>
								<th class="text-center">Título</th>
								<th colspan="2" class="text-center">Ação</th>
							</tr>
							@foreach ($talks as $tk)
							<tr>
								<td>{{ $tk->event->name}}</td>
								<td class="text-center">{{ $tk->titulo}}</td>
								<td class="text-center"><a class="btn btn-warning btn-sm"
									href="{{ route('talk.edit',$tk->id) }}"> Editar</a></td>
								<td class="text-center">
								 {{ Form::open(array('url' => 'talk/'.$tk->id, 'class' =>'text-center')) }} 
									{{ Form::hidden('_method', 'DELETE') }} 
									{{ Form::submit('Excluir', array('class' => 'btn btn-danger btn-sm')) }} 
								 {{ Form::close() }}
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