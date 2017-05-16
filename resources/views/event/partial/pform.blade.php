<div class="col-md-3">
	<div class="input-inline">
   		 <label for="nome">Período:</label>
		 <input type="text" name="dtinicial" id="dtinicial" class="form-control input-sm" required="required">
	</div>	
</div>

<div class="col-md-3">
	<div class="input-inline">
   		 <label for="nome">Até:</label>
		 <input type="text" name="dfinal" id="dtfinal" class="form-control input-sm" required="required">
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