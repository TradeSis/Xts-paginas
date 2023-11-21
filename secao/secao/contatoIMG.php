<?php
$parametro = json_decode($secaoPagina["parametros"], true);
?>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <p class="ts-titulo">
                <?php echo $parametro["titulo"] ?? 'Default' ?>
            </p>
            <img src="<?php echo $parametro["logo"] ?? 'http://localhost/img/black.png' ?>" role="img">
        </div>
        <div class="col-md-5">
            <form>
                <div>
                    <i class="bi bi-person-fill"></i>
                    <label class="form-label ts-label">Nome</label>
                    <input type="text" name="nome" class="form-control ts-input" />
                </div>
                <div>
                    <i class="bi bi-envelope-fill"></i>
                    <label class="form-label ts-label">E-mail profissional</label>
                    <input type="email" name="email" class="form-control ts-input" />
                </div>
                <div>
                    <i class="bi bi-telephone-fill"></i>
                    <label class="form-label ts-label">DDD + Telefone</label>
                    <input type="text" name="telefone" class="form-control ts-input" />
                </div>
                <div class="mt-2">
                    <button type="submit" class="ts-botaoTitulo">
                        <?php echo $parametro["textoBotao"] ?? 'Default' ?>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>