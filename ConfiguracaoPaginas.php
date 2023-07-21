<style>
  .temp{
    color:black
  }
</style>
<div class="container-fluid">

  <div class="row">
    <div class="col-md-2 mb-3">
      <ul class="nav nav-pills flex-column" id="myTab" role="tablist">

        <li class="nav-item">
          <a class="nav-link active temp" id="temas-tab" data-toggle="tab" href="#temas" role="tab" aria-controls="temas" aria-selected="true">temas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link temp" id="paginas-tab" data-toggle="tab" href="#paginas" role="tab" aria-controls="paginas" aria-selected="true">paginas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link temp" id="secao-tab" data-toggle="tab" href="#secao" role="tab" aria-controls="secao" aria-selected="false">secao</a>
        </li>
        <li class="nav-item">
          <a class="nav-link temp" id="categorias-tab" data-toggle="tab" href="#categorias" role="tab" aria-controls="categorias" aria-selected="false">categorias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link temp" id="autor-tab" data-toggle="tab" href="#autor" role="tab" aria-controls="autor" aria-selected="false">autor</a>
        </li>
        
      </ul>
    </div>
    <!-- /.col-md-4 -->
    <div class="col-md-10">
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="temas" role="tabpanel" aria-labelledby="temas-tab">
          <?php include 'configuracao/temas.php' ?>
        </div>
        <div class="tab-pane fade" id="paginas" role="tabpanel" aria-labelledby="paginas-tab">
        <?php include 'configuracao/paginas.php' ?>
        </div>
        <div class="tab-pane fade" id="secao" role="tabpanel" aria-labelledby="secao-tab">
        <?php include 'configuracao/secao.php' ?>
        </div>
        <div class="tab-pane fade" id="categorias" role="tabpanel" aria-labelledby="categorias-tab">
        <?php include 'configuracao/categorias.php' ?>
        </div>
        <div class="tab-pane fade" id="autor" role="tabpanel" aria-labelledby="autor-tab">
        <?php include 'configuracao/autor.php' ?>
        </div>
       
      </div>
    </div>
    <!-- /.col-md-8 -->
  </div>



</div>
<!-- /.container -->