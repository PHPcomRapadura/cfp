						
						<div class="col-md-12">
						<div class="col-md-4 col-md-offset-4">
						  <div class="form-group">						
							<img class="img-responsive" src="{{ asset('uploads/'.$user->foto) }}">
						  </div>
						  </div>
						</div>

						<div class="col-md-8">
						  <div class="form-group">
						   {!! Form::label('name','Nome do Evento:',array('class' => 'control-label')) !!}
						   {!! Form::text('name', null, ['class' => 'form-control']) !!}
						  </div>
						</div>
						
						 <div class="col-md-4">
						  <div class="form-group">
						     {!! Form::label('apelido','Apelido:',array('class' => 'control-label'))!!}
						   	 {!! Form::text('apelido', null, ['class' => 'form-control']) !!}
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
                          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="name">Senha:</label>
                                <input id="password" type="password"  class="form-control" name="password" maxlength="100" value="{{ old('password') }}" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="password-confirm">Confirme sua Senha:</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

			  			<div class="col-md-6">
						  <div class="form-group">
						     {!! Form::label('avatar','Trocar Avatar/Foto:',array('class' => 'control-label')) !!}
						     {!! Form::file('avatar') !!}
						  </div>
						 </div>


                     	<div class="col-md-4">
						  <div class="form-group">
						   {!! Form::label('cidade','Cidade:',array('class' => 'control-label')) !!}
						   {!! Form::text('cidade', null, ['class' => 'form-control']) !!}
						  </div>
						 </div>


                     	<div class="col-md-2">
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
						     <button type="submit" class="btn btn-success btn-sm"><strong><i class="fa fa-floppy-o" aria-hidden="true"></i>
						      Salvar</strong></button>
						     <a class="btn btn-warning btn-sm" href="{{ url('/home') }}"> <strong><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Voltar</strong></a>
						  </div>
						 </div>
						 
