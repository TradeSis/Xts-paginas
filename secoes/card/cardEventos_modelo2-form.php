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
        <label class="labelForm">tipo de Evento</label>
        <select class="select form-control" name="tipoEvento">
          <option value="<?php echo $parametros["tipoEvento"] ?>"><?php echo $parametros["tipoEvento"] ?></option>
          <option value="evento">evento</option>
          <option value="visitacao">visitação</option>
          <option value="cursos">cursos</option>
          <option value="podcast">podcast</option>
        </select>
      </div>
    </div>
    <div class="col-sm-4" style="margin-top: -7px">
      <div class="select-form-group">
        <label class="labelForm">Quantidade</label>
        <select class="select form-control" name="qtdEvento">
          <option value="<?php echo $parametros["qtdEvento"] ?>"><?php echo $parametros["qtdEvento"] ?></option>
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