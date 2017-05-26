						
						<div class="col-md-12">
						<div class="col-md-4 col-md-offset-4">
						  <div class="form-group">						
							<img class="img-responsive" src="{{ asset('uploads/'.$user->foto) }}">
						  </div>
						  </div>
						</div>

						<div class="col-md-8">
						  <div class="form-group">
						   {!! Form::label('name','Nome:',array('class' => 'control-label')) !!}
						   {!! Form::text('name', null, ['class' => 'form-control']) !!}
						  </div>
						</div>
						
						 <div class="col-md-4">
						  <div class="form-group">
						     {!! Form::label('apelido','Apelido:',array('class' => 'control-label'))!!}
						   	 {!! Form::text('apelido', null, ['class' => 'form-control']) !!}
						  </div>
						 </div>

						  <div class="col-md-4">
						  <div class="form-group">
						     {!! Form::label('sexo_id','Sexo:',array('class' => 'control-label')) !!}
						     {!! Form::select('sexo_id', $sex, null, ['class' => 'form-control']) !!}
						  </div>
						 </div>
						 
						 <div class="col-md-4">
						  <div class="form-group">
						   {!! Form::label('alimentacao','Tipo de Alimentação:',array('class' => 'control-label')) !!}
						   {!! Form::text('alimentacao', null, ['class' => 'form-control']) !!}
						  </div>
						 </div>

						 <div class="col-md-4">
						  <div class="form-group">
						   {!! Form::label('aeroporto','Aeroporto (sigla):',array('class' => 'control-label')) !!}
						   {!! Form::text('aeroporto', null, ['class' => 'form-control']) !!}
						  </div>
						 </div>
						 
						 <div class="col-md-6">
						  <div class="form-group">
						   {!! Form::label('email','E-mail:',array('class' => 'control-label')) !!}
						   {!! Form::text('email', null, ['class' => 'form-control']) !!}
						  </div>
						 </div>
                     
                     
                     	<div class="col-md-6">
						  <div class="form-group">
						   {!! Form::label('git','Github:',array('class' => 'control-label')) !!}
						   {!! Form::text('git', null, ['class' => 'form-control']) !!}
						  </div>
						 </div>

                     	<div class="col-md-6">
						  <div class="form-group">
						   {!! Form::label('cidade','Cidade:',array('class' => 'control-label')) !!}
						   {!! Form::text('cidade', null, ['class' => 'form-control']) !!}
						  </div>
						 </div>


                     	<div class="col-md-6">
						  <div class="form-group">
						   {!! Form::label('estado','Estado:',array('class' => 'control-label')) !!}
						   {!! Form::text('estado', null, ['class' => 'form-control']) !!}
						  </div>
						 </div>

						  <div class="col-md-12">
						  <div class="form-group">
						   {!! Form::label('biografia','Biografia:',array('class' => 'control-label')) !!}
						   {!! Form::textarea('biografia', null, ['class' => 'form-control','rows' => 5, 'cols' => 200,'maxlength' => 400]) !!}
						  </div>
						 </div>

						 <div class="col-xs-12">
						  <div class="form-group">
						     <a class="btn btn-warning btn-sm" href="javascript:history.back()"> <strong><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Voltar</strong></a>
						  </div>
						 </div>
						 
