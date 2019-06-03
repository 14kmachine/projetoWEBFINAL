<?php
    namespace academia;
    include './Classes/QuemSomos.php';
    
    $s = new QuemSomos();
?>

<!DOCTYPE html>
<!--
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- JQquery-->
        <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
        
        <!-- Botstrap-->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        
        <!-- Font Awesome-->
        <link href="css/all.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/all.min.js" type="text/javascript"></script>
        
        <!-- meu CSS-->
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
    </head>
    
    <body>
        <div id="topo">
            <img src="imagens/aff.png" alt=""/>
            <div id="icones">
                    <a href="Login.php" class="iconAdmin"><i class="fas fa-lock fa-5x"></i>
                    </a>    
                </div>
            
         
        </div>
        
        <div id="menu">
                <div class="navbar navbar-default">
                    <div class="container-fluid">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Inicio</a></li>
                            <li class="active"><a href="QuemSomos.php">Quem Somos</a></li>
                            <li><a href="PlanoseHorarios.php">Planos e Horarios</a></li>
                            <li><a href="Servicos.php">Serviços</a></li>

                        </ul>
                    </div>
                </div>
        </div>
        
        <div id="corpo">
            <h1>Historia</h1>
            <div id="textoQuemSomos">
                <p>
                   <?php
                   $s = new QuemSomos();
                   $resultado = $s->Listar();
                   echo $resultado->texto;
                   ?>
                </p>
                
            </div>
        </div>
        
        <div id="rodape">
             <p>2017-<?php echo date("Y"); ?> | TI-26 Senac | MR.XeroqueHolmes Todos os Direitos Reservados ©</p>      
        </div>
    </body>
</html>

