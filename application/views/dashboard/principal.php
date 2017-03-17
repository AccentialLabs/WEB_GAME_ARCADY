<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>

        <link href="../../css/bootstrap.min.css" rel="stylesheet"/> <!--responsável por não deixara ocabeçãllho solto-->

        <link href="../../assets/css/tela1.css" rel="stylesheet"/> 
        <script src="../../assets/js/tela1.js"></script> 
        <style>

            .ul-carousel {
                list-style: none;
                padding: 0;
                margin: 0;
            }
            .menu-carousel {
                display: flex;
                justify-content: space-between;
            }
            
            .li-carousel{
                padding: 10px;
                padding-bottom: 5px;
            }

        </style>
    <body>

        <!--container-->
        <div class="col-md-10  container-style" id="elemento1">
            <div id="page-content" class="margembranca"> 

                <div id="elemento1" class="col-md-12 pull-left" id="elemento1">
                    <div class="col-md-12" id="elemento1">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a> </li>
                            <li><a href="#">Products </a> </li>
                            <li><a href="#">Xyz </a> </li>
                            <li class="active">Features</li>
                        </ol>
                    </div>
                </div>

                <div  class="col-md-12" id="elemento1">															
                    <div class="tabbable"> 
                        <div class="col-md-12" id="elemento1">      									<!--Aqui começa a tab do lado esquerdo com tabela-->
                            <ul class ="nav nav-tabs">	

                                <li class="active"><a href="#tab1" data-toggle="tab">Individual</a></li>
                                <li><a href="#tab2" data-toggle="tab">Cargo</a></li>
                                <li><a href="#tab3" data-toggle="tab">Departamento</a></li>
                                <li><a href="#tab4" data-toggle="tab">Unidade</a></li>
                                <li><a href="#tab5" data-toggle="tab">Cidade</a></li>
                                <li><a href="#tab6" data-toggle="tab">Estado</a></li>
                                <li><a href="#tab7" data-toggle="tab">País</a></li>
                            </ul>    														 <!--Aqui Termina o cabeçalho da tab-->
                        </div>

                        <div class="tab-content">    
                            <div class="tab-pane active" id="tab1">

                                <!maregem a esquerda>
                                <div class="col-md-12  container-style" id="elemento1">  <br/>
                                    <div id="page-content" > 

                                        <!--Aqui estou chamando o script da btn/tabela que add linha-->
                                        <div class="AddTableRow"></div>
                                        <!--fim da chamada do script da tabela que add linha-->

                                        <div class="col-md-4" id="elemento1">
                                            <div class="col-md-11 pull-left corpotabjogador" id="elemento1">
                                                <div class="table-responsive"> <!--A classe responsive faz que tenhamos altura na tabela junto comm o height-->

                                                    <table class="tablesorter">
                                                        <thead>
                                                            <tr style="border-width: thin; border-style: solid; border-color: black;">
                                                                <!-- datatableCount -->
                                                                <th style="border-width: thin; border-style: solid; border-color: black;">Posição</th>
                                                                <th style="border-width: thin; border-style: solid; border-color: black;" class="text-center">Pontos</th> 
                                                                <th style="border-width: thin; border-style: solid; border-color: black;">Jogador</th> 

                                                            </tr>
                                                        </thead>

                                                        <tbody ng-repeat="membro in membroSede">
                                                            <?php
                                                            $contador = 1;
                                                            foreach ($rankingsIndividual as $ranking) {
                                                                ?>  
                                                                <!--penultimo passo, para exexutar tudo com o Foreach-->
                                                                <!-- Data Show Row-->
                                                                <tr class="listas" style="border-width: thin; border-style: solid;">

                                                                    <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $contador; ?></td>
                                                                    <td style="border-width: thin; border-style: solid; border-color: black;" class="text-center"><strong><?php echo $ranking['pontos']; ?></strong></td>
                                                                    <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $ranking['nome']; ?></td>
                                                                </tr> 
                                                                <?php $contador++;
                                                            }
                                                            ?> <!--penultimo passo-->
                                                        </tbody>

                                                    </table>
                                                </div>
                                            </div> <!-- Fim da tabelaaaaaaaaaa -->
                                        </div>


                                        <div class="col-md-3">
                                            <fieldset class="col-md-12" >
                                                <legend>Missões</legend>
                                                <div style="white-space: nowrap; overflow-x: auto; width: 100%;">

                                                    <ul class="menu-carousel ul-carousel"> 
                                                       <?php foreach($missoes as $missao){ ?>
                                                            <li class="text-center li-carousel">
                                                                <span class="glyphicon glyphicon-list-alt lists-icon"></span>
                                                                <br/>
                                                                <?php echo $missao['missao']; ?>
                                                            </li>
                                                       <?php }?>
                                                    </ul>
                                                </div>

                                            </fieldset>

                                            <fieldset  class="col-md-12">
                                                <legend class="">Realizações</legend>

                                                <fieldset class="rating">

                                                </fieldset>
                                            </fieldset> 

                                            <fieldset  class="col-md-12">
                                                <legend class="">Programas</legend>
                                                <form class="form-horizontal"> 
                                                     <div style="white-space: nowrap; overflow-x: auto; width: 100%;">

                                                    <ul class="menu-carousel ul-carousel"> 
                                                       <?php foreach($programas as $programa){ ?>
                                                            <li class="text-center li-carousel">
                                                                <span class="glyphicon glyphicon-globe lists-icon"></span>
                                                                <br/>
                                                                <?php echo $programa['nome']; ?>
                                                            </li>
                                                       <?php }?>
                                                    </ul>
                                                </div>
                                                </form>
                                            </fieldset>

                                        </div>

                                        <div class="col-md-5 text-center">
                                            ó   ó   
                                        </div>

                                        <!--
                                        <div class="col-md-2 pull-left">
                                            <div class="canvas-container" style="width: 50px;">
                                                <canvas id="idgrafico" >
                                                    <script>
                                                        var data = [
                                                            {
                                                                value: 40,
                                                                color: "#666666"
                                                            },
                                                            {
                                                                value: 30,
                                                                color: "#FFFF99"
                                                            },
                                                        ];
                                                        var canvas = document.getElementById("idgrafico");
                                                        var ctx = canvas.getContext("2d");
                                                        new Chart(ctx).Pie(data);
                                                    </script>
                                                </canvas>
                                                <label class="col-ms-12 pull-right">Realizações</label>
                                            </div>
                                        </div>
                                        -->

                                        <!--
                                        <div class="col-md-2 pull-left">
                                            <div class="canvas-container1" style="width: 50px;">
                                                <canvas id="idgrafico1" >
                                                    <script>
                                                        var data = [
                                                            {
                                                                value: 40,
                                                                color: "#666666"
                                                            },
                                                            {
                                                                value: 30,
                                                                color: "#FFFF99"
                                                            },
                                                        ];
                                                        var canvas = document.getElementById("idgrafico1");
                                                        var ctx = canvas.getContext("2d");
                                                        new Chart(ctx).Pie(data);
                                                    </script>
                                                </canvas>
                                                <label class="col-ms-12 pull-right">Realizações</label>
                                            </div>  
                                        </div>
                                        -->

                                        <!--
                                        <div class="col-md-2 pull-left">
                                            <canvas id="idgrafico2" >
                                                <script>
                                                    var data = [
                                                        {
                                                            value: 40,
                                                            color: "#666666"
                                                        },
                                                        {
                                                            value: 30,
                                                            color: "#FFFF99"
                                                        },
                                                    ];
                                                    var canvas = document.getElementById("idgrafico2");
                                                    var ctx = canvas.getContext("2d");
                                                    new Chart(ctx).Pie(data);
                                                </script>
                                            </canvas>
                                            <label class="col-ms-12 pull-right">Missões</label>
                                        </div>
                                        -->

                                        <!--
                                        <div class="col-md-2 pull-left">
                                            <div class="canvas-container4 col-md-6 pull-left"  style="width: 50px;">
                                                <canvas id="idgrafico4" >
                                                    <script>
                                                        var data = [
                                                            {
                                                                value: 40,
                                                                color: "#666666"
                                                            },
                                                            {
                                                                value: 30,
                                                                color: "#FFFF99"
                                                            },
                                                        ];
                                                        var canvas = document.getElementById("idgrafico4");
                                                        var ctx = canvas.getContext("2d");
                                                        new Chart(ctx).Pie(data);
                                                    </script>
                                                </canvas>
                                                <label class="col-lg-1 pull-right canvasps">Programas</label>
                                            </div>                           
                                        </div>  
                                        -->


                                    </div>
                                </div>

                            </div> <!-- aqui fecha a tab-pane -->
                            <div class="tab-pane" id="tab2">	 <!--Teste 1 para ver se funciona a caixa de lado-->
                                <p style="padding: 20px;"><br/>
                                <h4>Ranking por Cargo</h4>
                                <table class="tablesorter col-md-10">
                                    <thead>
                                        <tr style="border-width: thin; border-style: solid; border-color: black;">
                                            <!-- datatableCount -->
                                            <th style="border-width: thin; border-style: solid; border-color: black;">Posição</th>
                                            <th style="border-width: thin; border-style: solid; border-color: black;" class="text-center">Cargo</th> 
                                            <th style="border-width: thin; border-style: solid; border-color: black;" class="text-center">Pontos</th> 


                                        </tr>
                                    </thead>

                                    <tbody ng-repeat="membro in membroSede">
                                        <?php
                                        $contador = 1;
                                        foreach ($rankingsCargo as $ranking) {
                                            ?>  
                                            <!--penultimo passo, para exexutar tudo com o Foreach-->
                                            <!-- Data Show Row-->
                                            <tr class="listas" style="border-width: thin; border-style: solid;">

                                                <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $contador; ?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;" class="text-center"><?php echo $ranking['cargo']; ?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;" class="text-center"><strong><?php echo $ranking['pontos']; ?></strong></td>

                                            </tr> 
                                            <?php $contador++;
                                        }
                                        ?> <!--penultimo passo-->
                                    </tbody>

                                </table>

                                </p>
                            </div>

                            <div class="tab-pane" id="tab3">
                                <p style="padding: 20px;"><br/>
                                <h4>Ranking por Departamento</h4>
                                <table class="tablesorter col-md-10">
                                    <thead>
                                        <tr style="border-width: thin; border-style: solid; border-color: black;">
                                            <!-- datatableCount -->
                                            <th style="border-width: thin; border-style: solid; border-color: black;">Posição</th>
                                            <th style="border-width: thin; border-style: solid; border-color: black;" class="text-center">Departamento</th> 
                                            <th style="border-width: thin; border-style: solid; border-color: black;" class="text-center">Pontos</th> 


                                        </tr>
                                    </thead>

                                    <tbody ng-repeat="membro in membroSede">
                                        <?php
                                        $contador = 1;
                                        foreach ($rankingsDepartamento as $ranking) {
                                            ?>  
                                            <!--penultimo passo, para exexutar tudo com o Foreach-->
                                            <!-- Data Show Row-->
                                            <tr class="listas" style="border-width: thin; border-style: solid;">

                                                <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $contador; ?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;" class="text-center"><?php echo $ranking['departamento']; ?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;" class="text-center"><strong><?php echo $ranking['pontos']; ?></strong></td>

                                            </tr> 
    <?php $contador++;
}
?> <!--penultimo passo-->
                                    </tbody>

                                </table>

                                </p>
                            </div>

                            <div class="tab-pane" id="tab4">
                                <p style="padding: 20px;"><br/>
                                <h4>Ranking por Unidade</h4>
                                <table class="tablesorter col-md-10">
                                    <thead>
                                        <tr style="border-width: thin; border-style: solid; border-color: black;">
                                            <!-- datatableCount -->
                                            <th style="border-width: thin; border-style: solid; border-color: black;">Posição</th>
                                            <th style="border-width: thin; border-style: solid; border-color: black;" class="text-center">Unidade</th> 
                                            <th style="border-width: thin; border-style: solid; border-color: black;" class="text-center">Pontos</th> 
                                        </tr>
                                    </thead>

                                    <tbody ng-repeat="membro in membroSede">
                                        <?php
                                        $contador = 1;
                                        foreach ($rankingsUnidade as $ranking) {
                                            ?>  
                                            <!--penultimo passo, para exexutar tudo com o Foreach-->
                                            <!-- Data Show Row-->
                                            <tr class="listas" style="border-width: thin; border-style: solid;">

                                                <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $contador; ?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;" class="text-center"><?php echo $ranking['unidade']; ?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;" class="text-center"><strong><?php echo $ranking['pontos']; ?></strong></td>

                                            </tr> 
    <?php $contador++;
}
?> <!--penultimo passo-->
                                    </tbody>

                                </table>

                                </p>
                            </div>

                            <div class="tab-pane" id="tab5">
                                <p style="padding: 20px;"><br/>
                                <h4>Ranking por Cidade</h4>
                                <table class="tablesorter col-md-10">
                                    <thead>
                                        <tr style="border-width: thin; border-style: solid; border-color: black;">
                                            <!-- datatableCount -->
                                            <th style="border-width: thin; border-style: solid; border-color: black;">Posição</th>
                                            <th style="border-width: thin; border-style: solid; border-color: black;" class="text-center">cidade</th> 
                                            <th style="border-width: thin; border-style: solid; border-color: black;" class="text-center">Pontos</th> 
                                        </tr>
                                    </thead>

                                    <tbody ng-repeat="membro in membroSede">
<?php
$contador = 1;
foreach ($rankingsCidade as $ranking) {
    ?>  
                                            <!--penultimo passo, para exexutar tudo com o Foreach-->
                                            <!-- Data Show Row-->
                                            <tr class="listas" style="border-width: thin; border-style: solid;">

                                                <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $contador; ?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;" class="text-center"><?php echo $ranking['cidade']; ?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;" class="text-center"><strong><?php echo $ranking['pontos']; ?></strong></td>

                                            </tr> 
    <?php $contador++;
}
?> <!--penultimo passo-->
                                    </tbody>

                                </table>

                                </p>
                            </div>

                            <div class="tab-pane" id="tab6">
                                <p style="padding: 20px;"><br/>
                                <h4>Ranking por Estado</h4>
                                <table class="tablesorter col-md-10">
                                    <thead>
                                        <tr style="border-width: thin; border-style: solid; border-color: black;">
                                            <!-- datatableCount -->
                                            <th style="border-width: thin; border-style: solid; border-color: black;">Posição</th>
                                            <th style="border-width: thin; border-style: solid; border-color: black;" class="text-center">Estado</th> 
                                            <th style="border-width: thin; border-style: solid; border-color: black;" class="text-center">Pontos</th> 
                                        </tr>
                                    </thead>

                                    <tbody ng-repeat="membro in membroSede">
<?php
$contador = 1;
foreach ($rankingsEstado as $ranking) {
    ?>  
                                            <!--penultimo passo, para exexutar tudo com o Foreach-->
                                            <!-- Data Show Row-->
                                            <tr class="listas" style="border-width: thin; border-style: solid;">

                                                <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $contador; ?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;" class="text-center"><?php echo $ranking['estado']; ?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;" class="text-center"><strong><?php echo $ranking['pontos']; ?></strong></td>

                                            </tr> 
    <?php $contador++;
}
?> <!--penultimo passo-->
                                    </tbody>

                                </table>

                                </p>
                            </div>

                            <div class="tab-pane" id="tab7">
                                <p style="padding: 20px;"><br/>
                                <h4>Ranking por País</h4>
                                <table class="tablesorter col-md-10">
                                    <thead>
                                        <tr style="border-width: thin; border-style: solid; border-color: black;">
                                            <!-- datatableCount -->
                                            <th style="border-width: thin; border-style: solid; border-color: black;">Posição</th>
                                            <th style="border-width: thin; border-style: solid; border-color: black;" class="text-center">país</th> 
                                            <th style="border-width: thin; border-style: solid; border-color: black;" class="text-center">Pontos</th> 
                                        </tr>
                                    </thead>

                                    <tbody ng-repeat="membro in membroSede">
<?php
$contador = 1;
foreach ($rankingsPais as $ranking) {
    ?>  
                                            <!--penultimo passo, para exexutar tudo com o Foreach-->
                                            <!-- Data Show Row-->
                                            <tr class="listas" style="border-width: thin; border-style: solid;">

                                                <td style="border-width: thin; border-style: solid; border-color: black;"><?php echo $contador; ?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;" class="text-center"><?php echo $ranking['pais']; ?></td>
                                                <td style="border-width: thin; border-style: solid; border-color: black;" class="text-center"><strong><?php echo $ranking['pontos']; ?></strong></td>

                                            </tr> 
    <?php $contador++;
}
?> <!--penultimo passo-->
                                    </tbody>

                                </table>

                                </p>
                            </div>
                            <!--Termina aqui o teste 1 para ver se funciona a caixa de lado-->
                        </div>							
                    </div>	 
                </div>	 

                <!-- rodape -->

            </div>
        </div>

    </body>


    <!--FIM container-->