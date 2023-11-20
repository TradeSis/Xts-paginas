<?php
include_once(ROOT . '/cadastros/database/pessoas.php');

$pessoas = buscarPessoa();
?>
<div class="ts-filiais mt-2">
    <div class="container ts-filiais ts-textoCentro">
        <div class="row">
            <?php $counter = 0;
            foreach ($pessoas as $pessoa) {
                if ($counter < 4) { ?>
                    <div class="col">
                        <h4><?php echo $pessoa['municipio'] ?></h4>
                        <p><i class="bi bi-geo-alt-fill"></i> <?php echo $pessoa["endereco"] ?> | CEP: <?php echo $pessoa["cep"] ?> - <?php echo $pessoa["municipio"] ?>-<?php echo $pessoa["UF"] ?></p>

                        <?php if($pessoa['endereco2'] !== null ) { ?>
                        <hr>
                        <p><i class="bi bi-geo-alt-fill"></i> <?php echo $pessoa["endereco2"] ?? null ?> | CEP: <?php echo $pessoa["cep"] ?? null ?> - <?php echo $pessoa["municipio"] ?? null ?>-<?php echo $pessoa["UF"] ?? null ?></p> 
                        <?php } ?>

                        <p><i class="bi bi-telephone-fill"></i> <?php echo $pessoa["telefone"] ?></p> 
                    </div>
                <?php $counter++;}
                else { break; }
            } ?>
        </div>
    </div>
</div>