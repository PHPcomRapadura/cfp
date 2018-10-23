						
						<div class="col-md-12">
						  <div class="form-group">
						   {!! Form::label('titulo','Título:',['class' => 'control-label']) !!}
						   {!! Form::text('titulo', null, ['class' => 'form-control', 'placeholder' => 'Bote um titulo bem invocado']) !!}
						  </div>
						</div>
						
						 <div class="col-md-12">
						  <div class="form-group">
						     {!! Form::label('event_id','Evento:',array('class' => 'control-label')) !!}
						     {!! Form::select('event_id', $events, null, ['class' => 'form-control']) !!}
						  </div>
						 </div>

						 <div class="col-md-6">
						  <div class="form-group">
						     {!! Form::label('nivel_id','Nível:',array('class' => 'control-label')) !!}
						     {!! Form::select('nivel_id', $niveis, null, ['class' => 'form-control']) !!}
						  </div>
						 </div>
						
						 <div class="col-md-6">
						  <div class="form-group">
						     {!! Form::label('trilha','Trilhas:',array('class' => 'control-label')) !!}
						     {!! Form::select('trilha', $trilhas, null, ['class' => 'form-control']) !!}
						  </div>
						 </div>
						
						 <div class="col-md-12">
						  <div class="form-group">
						   {!! Form::label('descricao','Descrição:',array('class' => 'control-label')) !!}
						   {!! Form::textarea('descricao', null, ['placeholder'=>'Mas então, o que realmente você fai falar?', 'class' => 'form-control','rows' => 5, 'cols' => 200,'maxlength' => 400]) !!}
						  </div>
						 </div>

						 <div class="col-xs-12">
						  <div class="form-group">
						     <button type="submit" class="btn btn-success btn-sm"><strong><i class="fa fa-floppy-o" aria-hidden="true"></i>
						      Salvar</strong></button>
						     <a class="btn btn-warning btn-sm" href="javascript:history.back()"> <strong><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Voltar</strong></a>
						  </div>
						 </div>
						 