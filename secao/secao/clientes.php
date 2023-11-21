<?php
include_once(ROOT . '/cadastros/database/clientes.php');

$clientes = buscaClientes();
?>
<div class="container">
    <h2>Nossos Clientes</h2>
    <div class="row">
        <?php foreach ($clientes as $cliente) { ?>
                <div class="col-md-3">
                    <img src="<?php echo $cliente['imgCliente'] ?>" class="ts-clienteIcon" role="img">
                </div>
            <?php } ?>
    </div>
</div>