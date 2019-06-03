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
                            <li class="active"><a href="Servicos.php">Serviços</a></li>
                            <li><a href="Login.php">Area ADM</a></li>
                        </ul>
                    </div>
                </div>
        </div>
 
        <div id="corpo">
            <h1>Serviços Disponiveis</h1>
            <!--EMMET: div.noticia>img+h2+p-->
            <!-- max palavras machete: 6 palavras -->
            <div class="noticiaServico">
                <img src="imagens/testenovo.jpg" alt=""/>
                <h2>Musculação</h2>
                
                <p>
                    <!-- max palavras 70-->
                      além de ajudar a queimar gordura antes e após o treino, trabalha os músculos e modela o corpo deixando-o mais firme e bonito. O treinamento com pesos auxilia no emagrecimento, aumenta o gasto calórico diário e estimula o metabolismo.
                </p>
               
            </div>
            
            <div class="noticiaServico">
                <img src="imagens/treinamento-funcional.jpg" alt=""/>
                <h2>Treinamento Funcional</h2>
                
                <p>
                    As vantagens em aderir ao treinamento funcional. O treinamento funcional se baseia nos movimentos naturais do ser humano, como pular, correr, puxar, agachar, girar e empurrar. O praticante ganha força, equilíbrio, flexibilidade, condicionamento, resistência e agilidade.
                </p>
               
            </div>
            
            <div class="noticiaServico">
                <img src="imagens/dancafitness.jpg" alt=""/>
                <h2>Dança</h2>
                
                <p>
                Dançar não é simplesmente mexer pernas e braços e se deixar levar pela música. É uma atividade física que trabalha os músculos, permite a socialização das pessoas e melhora habilidades como ritmo, agilidade e equilíbrio. Isso sem contar nos ganhos para a autoestima 
                </p>
               
            </div>
            
            <div class="noticiaServico">
                <img src="imagens/personal.jpg" alt=""/>
                <h2>Personal Trainer</h2>
                
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                   
                </p>
               
            </div>
 
        </div>
        
        <div id="rodape">
            <p>2017-<?php echo date("Y"); ?> | TI-26 Senac | MR.XeroqueHolmes Todos os Direitos Reservados ©</p>   
               
        </div>
    </body>
</html>





