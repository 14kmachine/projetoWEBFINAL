<?php
    namespace academia;
    include '../Classes/PlanoseHorarios.php';
    
    $dex = new Horario();
  
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
        
         <script type="text/javascript">
    
            function Cancelar()
            {
                var acao = confirm("Tem Certeza?\n(Essa operação não pode ser desfeita)");
                
                if(acao === true)
                {
                    window.location.reload();
                }
            }
            
            </script>
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
                            <li><a href="Usuarios.php">Usuarios</a></li>
                            <li><a href="#">Sair</a></li>
                    </ul>
   
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
                <div id="HorarioADM">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <textarea id="CampoIndex" name="horario">
                        <?php
                        $resultado = $dex->Listar();
                        echo $resultado->horario;
                        ?>
                        </textarea>

                        <div id="inputHorarios">
                            <input class="btn btn-success" name="opcao" type="submit"  value="Atualizar">
                             <input onclick="Cancelar()" class="btn btn-danger" type="submit"  value="Cancelar">
                        </div>
                    </form>
                </div>
          
        </div>

        <div id="rodape">
           <p>2017-<?php echo date("Y"); ?> | TI-26 Senac | MR.XeroqueHolmes Todos os Direitos Reservados ©</p>
               
        </div>
        
    </body>
</html>

  <?php
    if(isset($_POST['horario'])&& isset($_POST['opcao']))      
    {
        if(empty($_POST['horario']))                
        {
            echo "<script type='text/javascript'> alert ('nao deixe os campos em branco vVv ');</script>";
        }
        else 
        {               
        $horario = $_POST['horario'];
        $opcao = $_POST['opcao'];
        

        $q = new Horario();

            switch ($opcao)
            {
                case "Atualizar":
                    $resultado = $q->Atualizar($horario);

                    if($resultado == 1)
                    {
                        echo "<script type='text/javascript'> "
                                 ."alert('Sucesso'); "
                                . "window.location.href='http://localhost/Projeto-finalAcademia/AreaAdministrativa/PlanoseHorarios.php';"
                             ."</script>";
                    }
                    else
                    {
                       echo "<script type='text/javascript'> alert ('Deu Ruim!');window.location.href='http://localhost/Projeto-finalAcademia/AreaAdministrativa/PlanoseHorarios.php';</script>"; 
                    }
                break;                
            }
        }                
    }

