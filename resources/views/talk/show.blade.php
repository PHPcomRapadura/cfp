@extends('layouts.app') 

@section('content')

<div class="container">

@can('talks-all')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading" id="cor-padrao">
					<strong><i class="fa fa-microphone" aria-hidden="true"></i>
						Informações da palestra</strong>

				</div>
				<div class="panel-body">

				{!! Form::model($talk,['route' => ['talk.update', $talk->id]]) !!} 

					@include('talk.partial.formd')

				{!! Form::close() !!}</div>
			</div>
		</div>
	</div>
</div>

@endcan

@endsection
