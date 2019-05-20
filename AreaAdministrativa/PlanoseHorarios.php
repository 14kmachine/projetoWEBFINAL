<?php
    namespace academia;
    include '../Classes/Usuarios.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Usuarios</title>
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
        <div id="menu">
            <div class="navbar navbar-default">
                <img src="../imagens/aff.png" alt=""/>
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                         <li><a href="index.php">Inicio</a></li>
                            <li><a href="QuemSomos.php">Quem Somos</a></li>
                            <li class="active"><a href="PlanoseHorarios.php">Planos e Horarios</a></li>
                            <li><a href="MundoFitness.php">Mundo Fitness</a></li>
                            <li><a href="Servicos.php">Serviços</a></li>
                            <li><a href="Contato.php">Contato</a></li>
                            <li><a href="Usuarios.php">Usuarios</a></li>
                            <li><a href="#">Sair</a></li>
                    </ul>
   
                </div>
            </div>
        </div>
        </div>
        <div id="corpo">
            <h1>Confira abaixo nossos Horarios de Funcionamento e Planos </h1>
            <table class="table table-striped table-hover">
                <h1>Planos Musculação</h1>
                <tr>
                    <td>Diario</td>
                    <td>Semanal</td>
                    <td>Quinzenal</td>
                    <td>Mensal</td>                   
                    <td>Trimenstral</td>
                </tr>
                <tr>
                    <td>$10,00</td>
                   <td>$20,00</td>
                    <td>$30,00</td>
                    <td>$65,00</td> 
                    <td>$170,00</td> 
                </tr>               
            </table>
            <table class="table table-striped table-hover">
                <h1>Planos Dança</h1>
                <tr>
                    <td>Mensal</td>                   
                    <td>Trimenstral</td>
                </tr>
                <tr>
                    <td>$60,00</td> 
                    <td>$150,00</td> 
                </tr>               
            </table>
            <div id="Horario">
            <h1>Horarios de Funcionamento</h1>
            <textarea></textarea>
            <br>
            <input class="btn btn-success" type="submit"  value="Inserir">
                <input class="btn btn-success" type="submit"  value="Atualizar">
                <input class="btn btn-danger" type="submit"  value="Deletar">
            </div>
        </div>

        <div id="rodape">
           <p>2017-<?php echo date("Y"); ?> | TI-26 Senac | MR.XeroqueHolmes Todos os Direitos Reservados ©</p>
               
        </div>
        
    </body>
</html>