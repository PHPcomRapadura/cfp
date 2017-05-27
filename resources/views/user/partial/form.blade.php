
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
						   {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Digite seu nome completo minha jóia.']) !!}
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
							  <label for="sexo_id" class="control-label">Sexo:</label>
							  <select name="sexo_id" id="sexo_id" class="form-control" required>
								  <option selected disabled> -- Selecione -- </option>
								  <option value="1" {{($user->sexo_id === 1)?'selected':''}}>Masculino</option>
								  <option value="2" {{($user->sexo_id === 2)?'selected':''}}>Feminino</option>
							  </select>
						     {{--{!! Form::label('sexo_id','Sexo:',array('class' => 'control-label')) !!}--}}
						     {{--{!! Form::select('sexo_id', $sex, null, ['class' => 'form-control']) !!}--}}
						  </div>
						 </div>

						 <div class="col-md-4">
						  <div class="form-group">
							  <label for="alimentacao" class="control-label">Alguma restrição alimentícia?</label>
							  <select name="alimentacao" id="alimentacao" class="form-control" required>
								  {{($user->alimentacao != '') ? '<option selected>'.$user->alimentacao.'</option>' : '<option selected> -- Selecione -- </option>'}}
								  <option value="Não"> Não </option>
								  <option value="Vegetariano">Vegetariano</option>
								  <option value="Vegano">Vegano</option>
							  </select>

							  {{--{!! Form::label('alimentacao','Tipo de Alimentação:',array('class' => 'control-label')) !!}--}}
						   {{--{!! Form::text('alimentacao', null, ['class' => 'form-control']) !!}--}}
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
                            <label for="name">Alterar Senha:</label>
                                <input id="password" type="password"  class="form-control" name="password" maxlength="100" />

                          </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="password-confirm">Confirme sua Senha:</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

			  			<div class="col-md-6">
						  <div class="form-group">
						     {!! Form::label('foto','Trocar Avatar/Foto:',array('class' => 'control-label')) !!}
						     {!! Form::file('foto') !!}
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
						     <a class="btn btn-warning btn-sm" href="javascript:history.back()"> <strong><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Voltar</strong></a>
						  </div>
						 </div>

