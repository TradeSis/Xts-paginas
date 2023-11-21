<?php
$parametro = json_decode($secaoPagina["parametros"], true);
?>
<hr>
<div class="ts-background ts-textoCentro" style="background-image: url('<?php echo $parametro["backgroundIMG"] ?>');">
    <p class="ts-titulo"><?php echo $parametro["titulo"] ?? 'Default' ?></p>
    <p class="ts-subTitulo"><?php echo $parametro["subTitulo"] ?? 'Default' ?></p>
</div>
<div class="ts-contatoFormCol">
    <form class="ts-contatoForm40">
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