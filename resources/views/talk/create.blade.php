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

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading" id="cor-padrao">
					<strong><i class="fa fa-microphone" aria-hidden="true"></i>
						Submeta sua palestra</strong>

				</div>
				<div class="panel-body">
				{!! Form::open(['route' => 'talk.store','method' => 'POST']) !!} 

					@include('talk.partial.form')

				{!! Form::close() !!}</div>
			</div>
		</div>
	</div>
</div>

@endcan

@endsection
