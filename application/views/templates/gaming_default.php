<title>Gaming APP</title>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../../assets/css/bootstrap.min.css" rel="stylesheet"/>
<!-- <link href="css/configuracoes4.css" rel="stylesheet" />   retirei por confiurar a nav-brand --> 
<script src="../../assets/js/jquery.min.js"></script> 
<script src="../../assets/js/bootstrap.min.js"></script> 
<!-- COMEÇA AQUI A TABELA NO HEAD -->
<!-- Estilos necessários para o tema do tablesorter -->
<link rel="stylesheet" href="../../assets/css/blue/style.css">
<link rel="stylesheet" href="../../assets/css/GamingDefault.css">
<!-- jQuery e Tablesorter -->
<script src="../../assets/js/jquery-latest.js"></script>
<script src="../../assets/js/jquery.tablesorter.min.js"></script>
<!-- Meu script -->
<script src="../../assets/js/scripts.js"></script> 
<link href="../../assets/css/gaming_defaultdivider.css" rel="stylesheet"/>
<div class="col-md-12 header-style">
    <nav class="navbar navbar-default nab-branco">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=" col-md-6 pull-left">
                <a class="navbar-brand" href="#"><strong>Game APP |</strong>Company Console</a>
            </div>

            <div class= 'col-md-2 pull-right gaming-header text-right'>
                <a class= "navbar-brand" href ="#"><small><?php
                        if ($this->session->userdata('empresaLogada')) {
                            echo $this->session->userdata('empresaLogada')['nome'];
                        }
                        ?></small><br/>
                    <small><?php
                        if ($this->session->userdata('empresaLogada')) {
                            echo $this->session->userdata('empresaLogada')['responsavelemail'];
                        }
                        ?></small></a>
            </div>

            <div class= 'col-md-4 pull-right text-center'>
                <a class= "navbar-brand" href ="#">
                    <strong>
                        <!-- ARRUMAR TITULO VARIAVEL -->
                        <?php
                        if (!empty($titulo)) {
                            echo $titulo;
                        }
                        ?>
                    </strong>
                </a>
            </div>
        </div>
    </nav>
</div>
<!-- fim cabeçalho -->
<!--Menu-->
<div class="col-md-2 pull-left div-vermelha allmenu hide">

    <ul class="nav nav-pills nav-stacked">
        <li role="presentation"><a href="../dashboard/principal">Inicial</a></li>
        <li role="presentation"><a href="../objetos/listaObjetos">Objetos</a></li>
        <li role="presentation"><a href="../Acoes/listaAcoes">Ações</a></li>
        <li role="presentation"><a href="../reconhecimento/reconhecimentoConquista">Reconhecimento</a></li>
        <li role="presentation"><a href="../missoes/listaMissoes">Missões</a></li>
        <li role="presentation"><a href="../programas/argProgramas">Programas</a></li>
        <li role="presentation"><a href="../programas/cadastrarDesafio">Desafios</a></li>
        <li class="divider-style"></li>
        <li role="presentation"><a href="../Addon/index">MOD/Packs</a></li>
        <li class="divider-style"></li>
        <li role="presentation"><a href="#">Cadastro</a></li>
        <li role="presentation"><a href="../jogadores/index">Jogadores</a></li>
        <li role="presentation"><a href="../equipes/listaEquipes"><span class="menu-submenu">Equipes</span></a></li>
        <li role="presentation"><a href="../premio/ganharpremio"><span class="menu-submenu">Prêmios</span></a></li>
        <li class="divider-style"></li>
        <li role="presentation"><a href="../configuracoes/dadosEmpresa">Configurações</a></li>
        <li role="presentation"><a href="../Telalogin/logout">Sair</a></li>
    </ul>
</div>

<div class="col-xs-2 col-lateral-menu">
    <!-- required for floating -->
    <!-- Nav tabs -->
    <ul class="nav nav-tabs tabs-left">
        <li class="active"><a href="#home" data-toggle="tab" class="menu-tab"><span class="glyphicon glyphicon-home"></span> Início</a></li>
        <li><a href="#profile" data-toggle="tab" class="menu-tab"><span class="glyphicon glyphicon-oil"></span> MODs/Packs</a></li>
        <li><a href="#messages" data-toggle="tab" class="menu-tab"><span class="glyphicon glyphicon-user"></span> Cadastros</a></li>
        <li><a href="#settings" data-toggle="tab" class="menu-tab"><span class="glyphicon glyphicon-dashboard"></span> Relatórios</a></li>
        <li><a href="#configuracoes" data-toggle="tab" class="menu-tab"><span class="glyphicon glyphicon-cog"></span> Configurações</a></li>
        <li><a href="#logout" data-toggle="tab" class="menu-tab"><span class="glyphicon glyphicon-off"></span> Sair</a></li>
    </ul>
</div>


<span></span>

