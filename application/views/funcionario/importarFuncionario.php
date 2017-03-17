<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
        <link href="../../assets/css/importarF.css" rel="stylesheet"/>
        
        <form  method="post" action="../funcionario/createImportarfuncionarios">
       
    <!--container-->
           <div class="col-md-10  container-style">
                <div id="page-content" class="margembranca"> 

                    <div id="elemento1" class="col-md-12 ">

                        <fieldset class="scheduler-border-custom ">
                            <legend class="scheduler-border-custom">Instuções para inportação de dados </legend>

                            <div class="col-md-12"> 
                                <div class="col-md-2 text-center">
                                    <span class="glyphicon glyphicon-info-sign tamanhoicone" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-10"> 
                                    <p> Para importar os dados dos funcionários você precisa usar-modelo (template)para prencher com todas as informações
                                        que os sistema vai utilizar.Algumas informações são obrigatórias (como Cod.Funcional, Nome, Departamento, etc.), outras opcionais
                                        e você  pode indicar quantas quiser (basta preencher a célula na primeira linha com o nome de campo que quer
                                        incluir.As colunas com a primeira linha vazia, não serão importadas.</p>
                                    <br />
                                    <div>

                                        <div class="col-md-3">
                                            <p>Planilha-modelo (template)</p>
                                        </div>

                                        <div class="col-md-9">
                                            <a href="#" class="ico-search">Clique aqui para baixar a planilha-modelo para importação de dados</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>

                    <div id ="elemento2" class="col-md-12"> 
                        <div class="col-md-12">

                            <div class="col-md-2 text-center" >
                                <span class="glyphicon glyphicon-info-sign tamanhoicone" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-10">
                                <p>O sistema utiliza o campo COD.FUNCIONARIO chave única de identificação do Funcionário dentro da basse de dados.
                                    Para atualizar as informações dos Funcionários já carregados (exceto excluir),basta indicar o mesmo Código na planilha.</p> 


                                <div class="col-md-3">
                                    <p>Carregar planilha com dados</p>
                                    <br/>
                                </div>

                                <div class ="col-md-9">
                                    <a href="#" class="ico-search">Clique aqui para selecionar a planilha com os dados dos Funcionários</a>

                                </div>

                            </div>
                        </div>
                    </div>



                    <div id="elemento3" class="col-md-12">
                        <div class="col-md-12">

                            <div class="col-md-2 text-center">
                                <span class="glyphicon glyphicon-info-sign tamanhoicone" aria-hidden="true"></span>
                            </div>

                            <div class ="col-md-10">
                                <p> O sistema pode criar as Equipes automaticamente, basta selecionar quais deseja para cada Funcionário. Um funcionário pode participar de várias equipes.
                                    Novos Funcionários serão incluídos nas equipes existentes.</p>
                            </div>

                        </div>
                    </div>

                    <div  id ="elemento2" class="col-md-12"> 
                        <div class="col-md-12">

                            <div class="col-md-2 text-center">
                            </div>

                            <div  class="col-md-10">

                                <div class="col-md-5"> 
                                    
                                        <input type="checkbox" id="definirequipes" name="definirequipes" value="1"> Definir Equipes(automaticamente)
                                    
                                </div>

                                <div class = "checbox checboxcontainer">
                                    <label><input id="planilha" name="planilha" type="checkbox"  VALUE="1">Campos da Planilha</label>
                                </div>  

                                <div class="col-md-3">

                                    <div class = "checbox checboxcontainer">
                                        <label><input id="cargo" name="cargo" type="checkbox"  VALUE="2" > Cargo </label>
                                    </div>  

                                    <div class = "checbox checboxcontainer">
                                        <label><input id="departamento" name="departamento" type="checkbox"  value="3"> Departamento</label>
                                    </div> 

                                    <div class = "checbox disabled checboxcontainer">
                                        <label><input id="unidade" name="unidade" type="checkbox" value="4" > Unidade</label>
                                    </div> 

                                </div>


                                <div  class="col-md-2 ">

                                    <div class = "checbox checboxcontainer">
                                        <label><input id="cidade" name="cidade" type="checkbox" value="5"> Cidade </label>
                                    </div>  

                                    <div class = "checbox checboxcontainer">
                                        <label><input id="estado" name="estado" type="checkbox" value="6"> Estado</label>
                                    </div> 

                                    <div class = "checbox disabled checboxcontainer">
                                        <label><input id="pais" name="pais" type="checkbox" value="7"> País</label>
                                    </div> 
                                </div>

                                <div class="col-md-3 ">
                                    <div class = "checbox checboxcontainer">
                                        <label><input id="grupo" name="grupo" type="checkbox" value="2"> Grupo </label>
                                    </div>  

                                    <div class = "checbox checboxcontainer">
                                        <label><input id="cipa" name="cipa" type="checkbox" value="3"> CIPA</label>
                                    </div> 
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- rodape -->
                    <div>
                        <button class="btn btn-deafult pull-right">Cancelar</button>
                        <button type="submit" class="btn btn-primary pull-right btnazul">Salvar</button>
                    </div> 

                </div>
            </div>
        </form>
  
<!--FIM container-->