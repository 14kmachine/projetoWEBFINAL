<?php
    namespace academia;
    include '../Classes/QuemSomos.php';
    
    $s = new QuemSomos();
?>

<!DOCTYPE html>

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
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <textarea id="CampoQuemSomos" name="texto">
                    <?php
                    $resultado = $s->Listar();
                    echo $resultado->texto;
                    ?>
                    </textarea>
                    <br>

                    <div id="inputQS">

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
    if(isset($_POST['texto'])&& isset($_POST['opcao']))      
    {
        if(empty($_POST['texto']))                
        {
            echo "<script type='text/javascript'> alert ('nao deixe os campos em branco vVv ');</script>";
        }
        else 
        {               
        $texto = $_POST['texto'];
        $opcao = $_POST['opcao'];
        

        $q = new QuemSomos();

            switch ($opcao)
            {
                case "Atualizar":
                    $resultado = $q->Atualizar($texto);

                    if($resultado == 1)
                    {
                        echo "<script type='text/javascript'> "
                                 ."alert('Sucesso'); "
                                . "window.location.href='http://localhost/Projeto-finalAcademia/AreaAdministrativa/QuemSomos.php';"
                             ."</script>";
                    }
                    else
                    {
                       echo "<script type='text/javascript'> alert ('Deu Ruim!');window.location.href='http://localhost/Projeto-finalAcademia/AreaAdministrativa/QuemSomos.php';</script>"; 
                    }
                break;                
            }
        }                
    }
   