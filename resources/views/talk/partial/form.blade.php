						
						<div class="col-md-12">
						  <div class="form-group">
						   {!! Form::label('titulo','Título:',array('class' => 'control-label')) !!}
						   {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
						  </div>
						</div>
						
						 <div class="col-md-12">
						  <div class="form-group">
						     {!! Form::label('event_id','Evento:',array('class' => 'control-label')) !!}
						     {!! Form::select('event_id', $events, null, ['class' => 'form-control']) !!}
						  </div>
						 </div>
						 
						 <div class="col-md-4">
						  <div class="form-group">
						   {!! Form::label('descricao','Descrição:',array('class' => 'control-label')) !!}
						   {!! Form::textarea('descricao', null, ['class' => 'form-control','cols'=>'50']) !!}
						  </div>
						 </div>

						 
						 <div class="col-xs-12">
						  <div class="form-group">
						     <button type="submit" class="btn btn-success btn-sm"><strong><i class="fa fa-floppy-o" aria-hidden="true"></i>
						      Salvar</strong></button>
						     <a class="btn btn-warning btn-sm" href="{{ url('/event') }}"> <strong><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Voltar</strong></a>
						  </div>
						 </div>
						 