<?php
    namespace academia;
    include './Classes/Index.php';
    
    $dex = new IndexADM();
?>

<!DOCTYPE html>
<!--
../ voltar pagina
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
                            <li class="active"><a href="index.php">Inicio</a></li>
                            <li><a href="QuemSomos.php">Quem Somos</a></li>
                            <li><a href="PlanoseHorarios.php">Planos e Horarios</a></li>      
                            <li><a href="Servicos.php">Serviços</a></li>
<!--                            <li><a href="Login.php">Area ADM</a></li>-->
                        </ul>
                    </div>
                </div>
        </div>
        
        <div id="corpo">
            <h1>Bem Vindo ao nosso Site</h1>
            <img src="#" alt="IMAGEM"/>
            <div id="textIndex">
                <p>
                   <?php
                   $dex = new IndexADM();
                   $resultado = $dex->Listar();
                   echo $resultado->texto;
                   ?>
                </p>                       
            </div>  
            
            <div id="iconCorpo">
                <h3>Redes Sociais</h3> 
                <a href="https://www.facebook.com/pages/Academia-Equipe-Performance/192097757617841?__tn__=%2CdkC-R-R&eid=ARATm6X8sw-ruZQbMS_NAwo9nzvNr22MbqjcF1WXWFEc9bw57vxKsxUBtkwXoMTY5w0GOPkn7cGLqacC&hc_ref=ARQQARDXo1hBeN1JyKDjiqw2kRkG2zDF5CE1fAMz0tMa6tlhVeGOQ5LqqAeoRgkjOo4&fref=tag" class="iconFacebook"> <i class="fab fa-facebook-square fa-5x"></i>
                    </a>
                <a href="https://www.instagram.com/academia_equipeperformance/?hl=pt-br" class="iconInstagram"><i class="fab fa-instagram fa-5x"></i>
                    </a>
            </div>
            
            <div id="infos">
                <h3>Telefone (14)7070-7070</h3>
                <h3>Av. BamBam Numero descendente</h3>
            </div>

        </div>
        
        <div id="rodape">
           <p>2017-<?php echo date("Y"); ?> | TI-26 Senac | MR.XeroqueHolmes Todos os Direitos Reservados ©</p>
               
        </div>
        
    </body>
</html>
