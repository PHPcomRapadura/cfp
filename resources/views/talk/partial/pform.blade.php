<div class="col-md-6">
	<div class="input-inline">
   		
      {!! Form::label('event_id','Evento:',array('class' => 'control-label')) !!}
      {!! Form::select('event_id', $events, null, ['class' => 'form-control']) !!}

	</div>	
</div>

 <div class="col-xs-6">
  <div class="form-group">
  	 <label><br></label><br>
     <button type="submit" class="btn btn-primary btn-sm"><strong><i class="fa fa-search" aria-hidden="true"></i>
      Exibir</strong></button>
     <a class="btn btn-warning btn-sm" href="{{ url('/home') }}"> <strong><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Voltar</strong></a>
  </div>
 </div>