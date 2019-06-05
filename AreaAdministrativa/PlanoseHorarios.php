<?php
    namespace academia;
    include '../Classes/PlanoseHorarios.php';
    include '../Classes/planosmusculacao.php';
    include '../Classes/planosdanca.php';
    
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
           <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
                <table class="table table-striped table-hover">
                    
                        <h1>Planos Musculação</h1>
                    
                    <tr>
                        <td>Diario</td>
                        <td>Semanal</td>
                        <td>Quinzenal</td>
                        <td>Mensal</td>                   
                        <td>Trimenstral</td>
                        <td>OPÇÕES</td>
                    </tr>
                    
                    <?php
                        $p = new PlanosMusculacao();
                        $resultado = $p->Listar();   
                    ?>
                    
                    <tr>
                        <td><input type="text" name="diario" value="<?php echo ($resultado->diario); ?>" /></td>
                        <td><input type="text" name="semanal" value="<?php echo ($resultado->semanal); ?>"/></td>
                        <td><input type="text" name="quinzenal" value="<?php echo ($resultado->quinzenal); ?>"/></td>
                        <td><input type="text" name="mensal" value="<?php echo ($resultado->mensal); ?>"</td> 
                        <td><input type="text" name="trimenstral" value="<?php echo ($resultado->trimenstral); ?>"</td> 
                    
                        <input class="btn btn-success" name="opcao" type="submit"  value="Atualizar Musculacao">
                    
                    </tr>                    
                </table>
            
                 <table class="table table-striped table-hover">
                    
                        <h1>Planos Dança</h1>
                    
                    <tr>                      
                        <td>Mensal</td>                   
                        <td>Trimenstral</td>
                        <td>OPÇÕES</td>
                    </tr>
                    
                    <?php
                        $d = new planosdanca();
                        $resultado = $d->Listar();

                    ?>
                    
                    <tr>                     
                        <td><input type="text" name="mensal" value="<?php echo ($resultado->mensal); ?>"</td> 
                        <td><input type="text" name="trimenstral" value="<?php echo ($resultado->trimenstral); ?>"</td> 
                    
                        <input class="btn btn-success" name="opcao" type="submit"  value="Atualizar Danca">
                    
                    </tr>                    
                </table>
       
                <div id="HorarioADM">

                        <textarea id="CampoIndex" name="horario">
                        <?php
                        $resultado = $dex->Listar();
                        echo $resultado->horario;
                        ?>
                        </textarea>

                        <div id="inputHorarios">
                             <input class="btn btn-success" name="opcao" type="submit"  value="Atualizar Horarios">
                             <input onclick="Cancelar()" class="btn btn-danger" type="submit"  value="Cancelar">
                        </div>

                </div>
           </form>
        </div>

        <div id="rodape">
           <p>2017-<?php echo date("Y"); ?> | TI-26 Senac | MR.XeroqueHolmes Todos os Direitos Reservados ©</p>
               
        </div>
        
    </body>
</html>

  <?php
    if(isset($_GET['horario'])&& 
            isset($_GET['opcao'])&& 
            isset($_GET['diario'])&& 
            isset($_GET['semanal'])&& 
            isset($_GET['quinzenal'])&& 
            isset($_GET['mensal'])&& 
            isset($_GET['trimenstral'])&& 
            isset($_GET['horario'])&&
            isset($_GET['mensaldanca'])&&
            isset($_GET['trimenstraldanca']))      
    {
        if(empty($_GET['horario'])&&($_GET['diario'])&&($_GET['semanal'])&&($_GET['quinzenal'])&&($_GET['mensal'])&&($_GET['trimenstral'])&&($_GET['mensaldanca'])&&($_GET['trimenstraldanca']))                
        {
            echo "<script type='text/javascript'> alert ('nao deixe os campos em branco vVv ');</script>";
        }
        else 
        {               
        $horario = $_GET['horario'];
        $opcao = $_GET['opcao'];
        $diario = $_GET['diario'];
        $semanal = $_GET['semanal'];
        $quinzenal = $_GET['quinzenal'];
        $mensal = $_GET['mensal'];
        $trimenstral = $_GET['trimenstral'];
        $mensaldanca = $_GET['mensaldanca'];
        $trimenstraldanca = $_GET['trimenstral'];
        
        

        $q = new Horario();
        $p = new PlanosMusculacao();
        $d = new PlanosDanca();

            switch ($opcao)
            {
                case "Atualizar Horarios":
                    $resultado = $q->Atualizar($horario);

                    if($resultado == 1)
                    {
                        echo "<script type='text/javascript'> "
                                 ."alert('Sucesso'); "
                             ."</script>";
                    }
                    else
                    {
                       echo "<script type='text/javascript'> alert ('Deu Ruim!');</script>"; 
                    }
                break;  
                
                case "Atualizar Musculacao":
                    $resultado = $p->Atualizar($diario, $semanal, $quinzenal, $mensal, $trimenstral);

                    if($resultado == 1)
                    {
                        echo "<script type='text/javascript'> "
                                 ."alert('Sucesso'); "
                             ."</script>";
                    }
                    else
                    {
                       echo "<script type='text/javascript'> alert ('Deu Ruim!');</script>"; 
                    }
                    
                    break;
                case "Atualizar Danca":
                    $resultado = $d->Atualizar($mensaldanca, $trimenstraldanca);

                    if($resultado == 1)
                    {
                        echo "<script type='text/javascript'> "
                                 ."alert('Sucesso'); "
                             ."</script>";
                    }
                    else
                    {
                       echo "<script type='text/javascript'> alert ('Deu Ruim!');</script>"; 
                    }
                    break;
            }
        }                
    }

