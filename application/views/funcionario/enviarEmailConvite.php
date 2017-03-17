<!DOCTYPE html>
<!--SCRIPT da caixa de texto necessário-aprimorada para edição-->
<script src="../../assets/js/tinymce.min.js"></script>
<script>tinymce.init({selector: 'textarea'});</script>
<!-- FIM do SCRIPT da caixa de texto aprimorada para edição-->

<link href="../../assets/css/enviar-email-convite3.css" rel="stylesheet"/>

<script src="../../assets/js/views/ajax/EnviaremailconviteAjax.js"></script>
<form  method="post" action="../funcionario/createFuncionario2" >

    <!--container-->
    <div id="elemento1" class="col-md-10  container-style ">
        <br/>
        <div id="elemento1" id="page-content" class="margembranca pull-right"> 

            <div class="col-md-12" >
                <div class="col-md-11"> 
                    <p>Nesta tela, você pode configurar e enviar e-mails para os Funcionários participarem do Jogo ou das Ações também será incluído na </br>
                        mensagem, o link para fazer o download das Apps para os dispositivos móveis de cada um.</br>
                        O login de acesso será o pópio e-mail e a senha será gerada automaticamente (poderá ser alterada no primeiro acesso) </p>
                </div>
                <!--Caixa de texto aprimorada para edição-->
                <div class="col-md-12" >
                    <div class="col-sm-6 col-lg-12" >
                        <div id="Layer1">
                            <div class="col-md-9">
                                <textarea>Easy (and free!) You should check out our premium features.</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!--FIM da Caixa de texto aprimorada para edição-->

                <!--primeiro radiobox-->
                <div class="col-sm-6 col-lg-7" >
                    <div class="col-md-5 ">
                        <label>
                            <input type="radio" id="destinatario" name="destinatario" value="0"> 
                            Enviar para todos
                        </label>
                    </div>
                </div>
                <!--Fim doorimeiro radiobox-->

                <!--segundo radiobox-->
                <div class="col-sm-6 col-lg-6" >
                    <div class="col-md-6 ">
                        <label>
                            <input type="radio" id="destinatario" name="destinatario" value="1"> 
                            Todos das(s) Equipes(s)
                        </label>
                    </div>
                </div>
                <!--Fim dosegundo radiobox-->

                <div  class="col-md-12">															
                    <div class="tabbable tabs-left">  

                        <div class="col-md-9"> 
                            <div class="tab-content">

                                <!--AQUI COMEÇA A parte de cima da tabela -->
                                <div class="table-responsive ">
                                    <table class="table table-striped table-bordered table-hover table-condensed">
                                        <thead>
                                            <tr>
                                                <th class="col-md-9">Selecione a Equipe</th>
                                                <th class="col-md-2 posicao"><center><input type="checkbox" name="opcoes" value="html"/></center></td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div> 

                                <!--aqui começa o restante da tabela-->
                                <div id="Layer1" class="positiontab">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover table-condensed">
                                            <tbody ng-repeat="membro in membroSede">                    
                                                <!--aqui irei cadastrar a tabela equipe -->                         
                                                <?php foreach ($equipestab as $equipestab) {
                                                    ?> 
                                                    <tr class="listas">     
                                                        <td class="col-md-10"><?php echo $equipestab['equipes']; ?> </td>  
                                                        <td class="col-md-2"><center><input type="checkbox" name="opcoes" class="statusCheckbox" id="<?php echo $equipestab['id']; ?>" value="<?php echo $equipestab['status']; ?>" <?php
                                                            if ($equipestab['status'] == 1) { 
                                                            echo "checked";
                                                            }
                                                            ?>/></center> </td>
                                                    </tr>
                                                <?php } ?> 
                                            </tbody>
                                        </table>
                                    </div>
                                </div> <!--aqui termina a tabela-->

                                <!--ultimo radiobox-->
                                <div class="col-sm-6 col-lg-6">
                                    <div class="col-md-8">
                                        <label>
                                            <input type="radio" name="corpo" id="corpo" value="1"> 
                                            Defenir manualmente
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <!-- Fim ultimo radiobox-->

                        </div>
                    </div>
                </div>		<!--Aqui termina a tab do lado esquerdo com tabela-->
            </div>
        </div>
    </div>
    <!-- rodape -->

    <div>
        <button type="submit" class="btn btn-primary pull-right btnazul">Salvar</button>
        <button class="btn btn-deafult pull-right">Cancelar</button>
    </div> 

</div>
</form>
</body>
</html>