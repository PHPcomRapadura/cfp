						
						
						<div class="col-md-12">
						  <div class="form-group">
						   {!! Form::label('name','Palestrante:',array('class' => 'control-label')) !!}
						   {!! Form::text('name', $user->apelido, ['class' => 'form-control']) !!}
						  </div>
						</div>

						<div class="col-md-12">
						  <div class="form-group">
						   {!! Form::label('titulo','Título:',array('class' => 'control-label')) !!}
						   {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
						  </div>
						</div>
						 
						 <div class="col-md-12">
						  <div class="form-group">
						   {!! Form::label('descricao','Descrição:',array('class' => 'control-label')) !!}
						   {!! Form::textarea('descricao', null, ['class' => 'form-control','rows' => 5, 'cols' => 200,'maxlength' => 400]) !!}
						  </div>
						 </div>

						 
						 <div class="col-xs-12">
						  <div class="form-group">
						     <a class="btn btn-warning btn-sm" href="{{ URL::previous() }}"> <strong><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Voltar</strong></a>
						  </div>
						 </div>
						 