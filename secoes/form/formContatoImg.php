<?php
$parametro = json_decode($secaoPagina["parametros"],true);

?>

<section>
  <div class="container-fluid" style="height:60px; background-color: #E2EBEB">
      <h4><?php echo $parametro['titulo'] ?></h4>
  </div>
  <div class="row mt-3">
    <div class="col-5 mb-4 p-4 ml-4">
        <img src="<?php echo URLROOT . $parametro['pastaImg'] . $parametro['nomeImg'] ?>" alt="">
    </div>

    <div class="col-6 mb-4 p-4 card shadow" style="margin-right:5px">
        <form style="height: 400px">
          
          <div>
            <i class="bi bi-person-fill"></i>
            <label class="form-label" for="form4Example1">Nome</label>
            <input type="text" id="form4Example1" name="nome" class="form-control" />          
          </div>

          <div>      
            <i class="bi bi-envelope-fill"></i>     
            <label class="form-label" for="form4Example2">Email</label>
            <input type="email" id="form4Example2" name="email" class="form-control" />
          </div>

          <div>  
            <i class="bi bi-telephone-fill"></i>        
            <label class="form-label" for="form4Example2">Telefone</label>
            <input type="email" id="form4Example2" name="telefone" class="form-control" />
          </div>

          
          <div>
            <i class="bi bi-chat-left-text-fill"></i>
            <label class="form-label" for="form4Example3">Mensagem</label>
            <textarea class="form-control" id="form4Example3" name="mensagem" rows="4"></textarea>
          </div>

         
        </form>
        <center>
          <button type="submit" class="btn btn-primary mb-4 mt-4"><?php echo $parametro['textoBotao'] ?></button>
          </center>
    </div>
  </div>
</section>
