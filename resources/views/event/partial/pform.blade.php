

            <div class="col-md-3">
              <div class="form-group">
               {!! Form::label('dtinicial','Período:',array('class' => 'control-label')) !!}
               {!! Form::text('dtinicial', null, ['class' => 'form-control', 'id'=>'dtinicial']) !!}
              </div>
            </div>

             <div class="col-md-3">
              <div class="form-group">
               {!! Form::label('dtfinal','Até:',array('class' => 'control-label')) !!}
               {!! Form::text('dtfinal', null, ['class' => 'form-control', 'id'=>'dtfinal']) !!}
              </div>
            </div>

         <div class="col-xs-6">
          <div class="form-group">
          	 <label><br></label><br>
             <button type="submit" class="btn btn-primary btn-sm"><strong><i class="fa fa-search" aria-hidden="true"></i>
              Exibir</strong></button>
             <a class="btn btn-warning btn-sm" href="{{ URL::previous() }}"> <strong><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Voltar</strong></a>
          </div>
         </div>