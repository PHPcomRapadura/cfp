@extends('layouts.app') 

@section('content')

@can('users-view')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<strong><i class="fa fa-user" aria-hidden="true"></i>
						Perfil</strong>

				</div>
				<div class="panel-body">

				{!! Form::model($user,['route' => ['user.update', $user->id]]) !!} 

					@include('user.partial.formd')

				{!! Form::close() !!}</div>
			</div>
		</div>
	</div>
</div>

@endcan

@endsection
