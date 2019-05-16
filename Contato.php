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
            
            
        </div>
        
        <div id="menu">
            
             <div class="navbar navbar-default">
                    <div class="container-fluid">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Inicio</a></li>
                            <li><a href="QuemSomos.php">Quem Somos</a></li>
                            <li><a href="PlanoseHorarios.php">Planos e Horarios</a></li>
                            <li><a href="MundoFitness.php">Mundo Fitness</a></li>
                            <li><a href="Servicos.php">Serviços</a></li>
                            <li class="active"><a href="Contato.php">Contato</a></li>
                            <li><a href="Login.php">Area ADM</a></li>
                        </ul>
                    </div>
                </div>
        </div>
        
        <div id="corpo">
            <h1>Contato</h1>
            <div id="contato">
                <!-- EMMET: FORM>(p+input)*6 -->
                <FORM>
                    <p>Nome Completo</p>
                    <input placeholder="Digite seu nome" name="nome" type="text">
                    <p>Email:</p>
                    <input placeholder="Digite seu email" name="email" type="text">
                    <p>Telefone</p>
                    <input placeholder="(11)9-9999-9999" name="telefone" type="text">
                    <p>Mensagem</p>
                    <textarea></textarea> 
                    <br>
                    <input class="btn btn-success" type="submit"  value="ENVIAR">
                </FORM>
               
                <div id="tel">
                <h3>Telefone (14)7070-7070</h3>
                </div>
            </div>
            

            
        </div>
        
        <div id="rodape">
            <p>2017-<?php echo date("Y"); ?> | TI-26 Senac | MR.XeroqueHolmes Todos os Direitos Reservados ©</p> 
               
        </div>
    </body>
</html>
