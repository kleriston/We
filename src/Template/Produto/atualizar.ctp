
<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar Produto</title>

</head>
<body>




<form method="post" class="form-horizontal" accept-charset="utf-8" action="/calculadora/Produto/atualizar/<?php echo $i?>"><input type="hidden" name="_method" value="POST"/>

<div class="col-md-12">
<center>	<h1>Alterar Produto</h1> </center>

</div>


  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-10">
      <input type="intput" name="nome" value="<?php echo $n?>" class="form-control" id="inputEmail3" placeholder="Nome">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Código</label>
    <div class="col-sm-10">
      <input type="intput" name="codigo" value="<?php echo $c?>"  class="form-control" id="inputPassword3" placeholder="Código">
    </div>
  </div>

   <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Valor</label>
    <div class="col-sm-10">
      <input type="intput"  name="valor" value="<?php echo $v?>" class="form-control" id="inputEmail3" placeholder="Nome">
    </div>
  </div>
  <d
  <div class="form-group">
  
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="cadastrar" id="cadastrar" class="btn btn-default">Alterar</button>
    </div>
  </div>
</form>
</body>
</html>



