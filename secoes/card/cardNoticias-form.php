<?php
include_once('../head.php');
include_once('../database/secaoPagina.php');

$parametros = json_decode($secoesPagina['parametros'], true);
?>


<div class="container" style="margin-top: 10px">

  <div class="row form-group" style="margin-bottom: 60px">
    <div class="col-sm-4">
      <label class='control-label' for='inputNormal' style="margin-top: -10px;">Titulo</label>
      <input type="text" name="titulo" class="form-control" value="<?php echo $parametros["titulo"] ?>">
    </div>
    <div class="col-sm-4" style="margin-top: -7px">
      <div class="select-form-group">
        <label class="labelForm">Categoria</label>
        <select class="select form-control" name="categoria">
          <option value="<?php echo $parametros["categoria"] ?>"><?php echo $parametros["categoria"] ?></option>
          <option value="null">recentes</option>
          <option value="3">sobreChocolate</option>
          <option value="4">sobreCacau</option>
          <option value="5">curiosidades</option>
          <option value="6">sem Categoria</option>
        </select>
      </div>
    </div>
    <div class="col-sm-4" style="margin-top: -7px">
      <div class="select-form-group">
        <label class="labelForm">Quantidade</label>
        <select class="select form-control" name="qtdPosts">
          <option value="<?php echo $parametros["qtdPosts"] ?>"><?php echo $parametros["qtdPosts"] ?></option>
          <option value="null">Todos</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
        </select>
      </div>
    </div>
  </div>

</div>