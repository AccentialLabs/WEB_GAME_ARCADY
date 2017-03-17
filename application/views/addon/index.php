<link href="../../assets/css/gaming/Addon.css" rel="stylesheet"/>
<script src="../../assets/js/views/ajax/Addon/Index.js"></script> 

<div class="col-md-10">
    <div id="elemento1" class="col-md-12 pull-left">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Xyz</a> </li>
                <li class="active">Features</li>
            </ol>
        </div>
    </div>


    <div class="btn-group pull-right btn-group-xs addon-group-btn" role="group" aria-label="...">
        <button type="button" class="btn btn-default"><a href='../Addon/editGoalPack'><span class='glyphicon glyphicon-plus'></span> Goal Pack</a></button>
        <button type="button" class="btn btn-default"><a href='../Addon/editSkillCompetencePack'><span class='glyphicon glyphicon-plus'></span> Skill and Competence Pack</a></button>
        <button type="button" class="btn btn-default"><a href='../Addon/editMinigameFaceFacts'><span class='glyphicon glyphicon-plus'></span> Face Facts</a></button>
        <button type="button" class="btn btn-default"><a href='../Addon/modpackEdit'><span class='glyphicon glyphicon-plus'></span> Asking for collaboration</a></button>
    </div>

    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th class="text-left">MOD/Pack</th>
                <th>Sobre</th>
                <th>Localização</th>
                <th>Instalado em</th>
                <th>Ativo</th>
                <th><input type="checkbox" /></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($mods as $mod) {
                if ($mod['status'] != 2) {
                    ?>
                    <tr id="<?php echo $mod['id']; ?>">
                        <td class="text-left"><small><?php echo $mod['titulo']; ?></small></td>
                        <td><small><?php echo $mod['descricao']; ?></small></td>
                        <td><small><?php echo $mod['localizacao']; ?></small></td>
                        <td><small><?php
                                $date = date_create($mod['dt_registro']);
                                echo date_format($date, 'd/m/Y');
                                ?></small></td>
                        <td><input type="checkbox" class="statusCheckbox" <?php echo ($mod['status'] == 1) ? 'checked' : '' ?> value="<?php echo $mod['status']; ?>" id="<?php echo $mod['id']; ?>"/></td>
                        <td><small><small><span class="glyphicon glyphicon-ban-circle remove-btn excluir" id="<?php echo $mod['id']; ?>"></span></small></small></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </tbody>
    </table>

</div>

