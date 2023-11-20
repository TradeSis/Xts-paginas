<?php
$parametro = json_decode($secaoPagina["parametros"], true);
?>
<div class="container-fluid ts-textoCentro mt-2">
    <div id="ts-tabs">
        <div class="tab whiteborder" id="tab-1">
            <?php echo $parametro["tab1"] ?>
        </div>
        <div class="tab" id="tab-2">
            <?php echo $parametro["tab2"] ?>
        </div>
        <div class="tab" id="tab-3">
            <?php echo $parametro["tab3"] ?>
        </div>
        <div class="line"></div>
        <div class="tabContent">
            <div class="container mt-2">
                <div class="row">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li>Service Desk</li>
                                    <li>Field Service</li>
                                    <li>BPO de TI</li>
                                    <li>Gestão Nível 3</li>
                                    <li>Banco de Dados</li>
                                    <li>Segurança da Informação</li>
                                    <li>AD&amp;LDAP</li>
                                    <li>Backups</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li> Filtro de Conteúdo</li>
                                    <li> Monitoramento (NOC)</li>
                                    <li> Gestão de Redes</li>
                                    <li> Consultorias</li>
                                    <li> Datacenter</li>
                                    <li> WiFi Corporativo</li>
                                    <li> Cabeamento Estruturado</li>
                                    <li> Certificação de Rede</li>
                                </ul>
                            </div>
                        </div>
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
                                <button type="submit" class="btn btn-primary">
                                    <?php echo $parametro["textoBotao"] ?? 'Default' ?>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="tabContent">
            <div class="container mt-2">
                <div class="row">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li>Desenvolvimento de Sistemas</li>
                                    <li>Aplicativos mobile</li>
                                    <li>Softwares sob medida</li>
                                    <li>Websites</li>
                                    <li>E-commerce</li>
                                    <li>Refactoring</li>
                                </ul>
                            </div>
                        </div>
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
                                <button type="submit" class="btn btn-primary">
                                    <?php echo $parametro["textoBotao"] ?? 'Default' ?>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="tabContent">
            <div class="container mt-2">
                <div class="row">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li>Desenvolvimento de Marca</li>
                                    <li>Identidade Visual</li>
                                    <li>Papelaria</li>
                                    <li>Desenvolvimento de Websites</li>
                                    <li>Landing Pages</li>
                                    <li>Criação e Gerenciamento de Mídias Sociais</li>
                                    <li>Campanhas On e Offline</li>
                                    <li>Adwords e Social Ads</li>
                                    <li>SEO</li>
                                </ul>
                            </div>
                        </div>
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
                                <button type="submit" class="btn btn-primary">
                                    <?php echo $parametro["textoBotao"] ?? 'Default' ?>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var tab;
    var tabContent;
    window.onload = function () {
        tabContent = document.getElementsByClassName('tabContent');
        tab = document.getElementsByClassName('tab');
        hideTabsContent(1);

        var urlParams = new URLSearchParams(window.location.search);
        var id = urlParams.get('id');
        if (id === 'tab2') {
            showTabsContent(1);
        }
        if (id === 'tab3') {
            showTabsContent(2);
        }
    }
    document.getElementById('ts-tabs').onclick = function (event) {
        var target = event.target;
        if (target.className == 'tab') {
            for (var i = 0; i < tab.length; i++) {
                if (target == tab[i]) {
                    showTabsContent(i);
                    break;
                }
            }
        }
    }
    function hideTabsContent(a) {
        for (var i = a; i < tabContent.length; i++) {
            tabContent[i].classList.remove('show');
            tabContent[i].classList.add("hide");
            tab[i].classList.remove('whiteborder');
        }
    }
    function showTabsContent(b) {
        if (tabContent[b].classList.contains('hide')) {
            hideTabsContent(0);
            tab[b].classList.add('whiteborder');
            tabContent[b].classList.remove('hide');
            tabContent[b].classList.add('show');
        }
    }
</script>
<!-- LOCAL PARA COLOCAR OS JS -FIM -->