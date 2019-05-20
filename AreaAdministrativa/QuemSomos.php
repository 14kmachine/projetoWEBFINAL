<!DOCTYPE html>
<!--
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- JQquery-->
        <script src="../js/jquery-3.4.1.min.js" type="text/javascript"></script>
        
        <!-- Botstrap-->
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        
        <!-- Font Awesome-->
        <link href="../css/all.min.css" rel="stylesheet" type="text/css"/>
        <script src="../js/all.min.js" type="text/javascript"></script>
        
        <!-- meu CSS-->
        <link href="../css/AreaAdministrativa.css" rel="stylesheet" type="text/css"/>
    </head>
    
    <body>
        <div id="topo">
            <img src="imagens/aff.png" alt=""/>
 
        </div>
        
                <div id="menu">
            <div class="navbar navbar-default">
                <img src="../imagens/aff.png" alt=""/>
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                         <li><a href="index.php">Inicio</a></li>
                            <li class="active"><a href="QuemSomos.php">Quem Somos</a></li>
                            <li><a href="PlanoseHorarios.php">Planos e Horarios</a></li>
                            <li><a href="MundoFitness.php">Mundo Fitness</a></li>
                            <li><a href="Servicos.php">Serviços</a></li>
                            <li><a href="Contato.php">Contato</a></li>
                            <li><a href="Usuarios.php">Usuarios</a></li>
                            <li><a href="../index.php">Sair</a></li>
                    </ul>
   
                </div>
            </div>
        </div>
                
        <div id="corpo">
            <h1>Historia</h1>
            <div id="textoQuemSomos">
                <textarea></textarea>
                <br>
                
                <div id="inputQS">
                <input class="btn btn-success" type="submit"  value="Inserir">
                <input class="btn btn-success" type="submit"  value="Atualizar">
                <input class="btn btn-danger" type="submit"  value="Deletar">
                </div>

            </div>
        </div>
        
        <div id="rodape">
             <p>2017-<?php echo date("Y"); ?> | TI-26 Senac | MR.XeroqueHolmes Todos os Direitos Reservados ©</p>      
        </div>
    </body>
</html>

