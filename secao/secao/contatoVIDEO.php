<?php
$parametro = json_decode($secaoPagina["parametros"], true);
?>
<hr>
<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-md-7 ts-textoCentro">
            <p class="ts-titulo">
                <?php echo $parametro["titulo"] ?? 'Default' ?>
            </p>
            <video autoplay="" muted="true" loop="" data-wf-ignore="true" data-object-fit="contain" class="ts-videoContato">
                <source src="<?php echo $parametro["video"] ?>" type="video/mp4" data-wf-ignore="true">
            </video>
        </div>
        <div class="col-md-5 ts-contatoFormCol">
            <form class="ts-contatoForm">
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