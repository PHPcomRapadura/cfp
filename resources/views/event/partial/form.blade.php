						
						<div class="col-md-12">
						  <div class="form-group">
						   {!! Form::label('name','Nome do Evento:',array('class' => 'control-label')) !!}
						   {!! Form::text('name', null, ['class' => 'form-control']) !!}
						  </div>
						</div>
						
						 <div class="col-md-4">
						  <div class="form-group">
						     {!! Form::label('datainicial','Data Início:',array('class' => 'control-label')) !!}
						   	 {!! Form::text('datainicial', null, ['class' => 'form-control','id'=>'dtinicial']) !!}
						  </div>
						 </div>
						 
						 <div class="col-md-4">
						  <div class="form-group">
						   {!! Form::label('datafinal','Data Término:',array('class' => 'control-label')) !!}
						   {!! Form::text('datafinal', null, ['class' => 'form-control','id'=>'dtfinal']) !!}
						  </div>
						 </div>
                     
                     
                     	<div class="col-md-4">
						  <div class="form-group">
						   {!! Form::label('datafimdocfp','Encerramento CFP:',array('class' => 'control-label')) !!}
						   {!! Form::text('datafimdocfp', null, ['class' => 'form-control' ,'id'=>'dtfimcfp']) !!}
						  </div>
						 </div>
						 
						 <div class="col-xs-12">
						  <div class="form-group">
						     <button type="submit" class="btn btn-success btn-sm"><strong><i class="fa fa-floppy-o" aria-hidden="true"></i>
						      Salvar</strong></button>
						     <a class="btn btn-warning btn-sm" href="{{ URL::previous() }}"> <strong><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Voltar</strong></a>
						  </div>
						 </div>
						 