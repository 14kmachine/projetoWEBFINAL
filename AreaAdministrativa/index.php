<?php
    namespace academia;
    include '../Classes/Index.php';
    
    $dex = new IndexADM();
?>

<!DOCTYPE html>
<!--
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bem-Vindo</title>
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
                        <li class="active"><a href="index.php">Inicio</a></li>
                            <li><a href="QuemSomos.php">Quem Somos</a></li>
                            <li><a href="PlanoseHorarios.php">Planos e Horarios</a></li>
                            <li><a href="Servicos.php">Serviços</a></li>
                            <li><a href="Usuarios.php">Usuarios</a></li>
                            <li><a href="../index.php">Sair</a></li>
                    </ul>
   
                </div>
            </div>
        </div>
        
        <div id="corpo">
            <h1>Bem-Vindo a nossa Pagina Administrativa</h1>
            <img src="#" alt="IMAGEM"/>
            <div id="textIndexADM">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <textarea id="CampoIndex" name="textoIndex">
                        <?php
                        $resultado = $dex->Listar();
                        echo $resultado->textoIndex;
                        ?>
                        </textarea>


                    <br>
                    <input class="btn btn-success" name="opcao" type="submit"  value="Atualizar">
                    <input onclick="Cancelar()" class="btn btn-danger" type="submit"  value="Cancelar">
                </form>
            </div>

          
            <div id="iconCorpoADM">
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
        

        $q = new IndexADM();

            switch ($opcao)
            {
                case "Atualizar":
                    $resultado = $q->Atualizar($texto);

                    if($resultado == 1)
                    {
                        echo "<script type='text/javascript'> "
                                 ."alert('Sucesso'); "
                                . "window.location.href='http://localhost/Projeto-finalAcademia/AreaAdministrativa/index.php';"
                             ."</script>";
                    }
                    else
                    {
                       echo "<script type='text/javascript'> alert ('Deu Ruim!');window.location.href='http://localhost/Projeto-finalAcademia/AreaAdministrativa/index.php';</script>"; 
                    }
                break;                
            }
        }                
    }



