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
        
        <script type="text/javascript">
            function Editar(id, nome, email, usuario)
            {
                document.getElementsByName('id')[0].value = id;
                document.getElementsByName('nome')[0].value = nome;
                document.getElementsByName('email')[0].value = email;
                document.getElementsByName('usuario')[0].value = usuario;
                
                document.getElementById('inserirBtn').style.display = "none";
                document.getElementById('atualizarBtn').style.display = "inline";

            }
            function Cancelar()
            {
                var acao = confirm("Tem Certeza?\n(Essa operação não pode ser desfeita)");
                
                if(acao === true)
                {
                    window.location.reload;
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
                            <li><a href="PlanoseHorarios.php">Planos e Horarios</a></li>
                            <li class="active"><a href="Usuarios.php">Usuarios</a></li>
                            <li><a href="../index.php">Sair</a></li>
                    </ul>
   
                </div>
            </div>
        </div>
        
        <div id="corpo" >
            <h1>Usuarios</h1>
            <div id="FormUsuario">
                <h2>Novo Usuario</h2>
                <!-- EMMET:form>(p+input)*5+input*3 -->
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <p>ID</p>
                    <input name="id" type="text">
                    <p>Nome Completo</p>
                    <input name="nome" type="text" autofocus="" >
                    <p>Email</p>
                    <input name="email" type="text">
                    <p>Usuario</p>
                    <input name="usuario" type="text">
                    <p>senha</p>
                    <input name="senha" type="password">
                    <br><br>                  
                    <input id="inserirBtn" class="btn-primary" name="opcao" type="submit" value="Inserir">
                    <input id="atualizarBtn" style="display: none;" class="btn btn-warning" name="opcao" type="submit" value="Atualizar">
                    <input onclick="Cancelar();" id="cancelarBtn" class="btn btn-danger" name="opcao" type="submit" value="Cancelar">
                    
                </form>
            </div>
            <table class="table table-striped table-hover">
                <tr>
                    <td>ID</td>
                    <td>NOME</td>
                    <td>USUARIO</td>
                    <td>EMAIL</td>
                    <td colspan="2">OPÇOES</td>
                </tr>
                <?php
                $u = new Usuarios();
                $usuarios = $u->ListarTodos();
                
                foreach ($usuarios as $key ) 
                {
                    echo "<tr>"
                            ."<td>".$key->id."</td>"
                            ."<td>".$key->nome."</td>"
                            ."<td>".$key->usuario."</td>"
                            ."<td>".$key->email."</td>"
                            ."<td><a onclick='Editar(&quot;".$key->id."&quot;, &quot;".$key->nome."&quot;, &quot;".$key->email."&quot;, &quot;".$key->usuario."&quot;);' href='#' class='btn btn-warning'>Editar</a> </td>"
                            ."<td><a onclick=' return confirm(&quot; tem certeza&quot;);' href='?id=".$key->id."&opcao=Deletar' class='btn btn-danger'>Excluir</a></td>"
                    ."</tr>";
                }
             ?>
            </table>
        </div>

        
        <div id="rodape">
             <p>2017-<?php echo date("Y"); ?> | TI-26 Senac | MR.XeroqueHolmes Todos os Direitos Reservados ©</p>
        </div>
    </body>
</html>
<?php
    if(isset($_POST['id'])&&
            isset($_POST['nome'])&&
            isset($_POST['email'])&&
            isset($_POST['usuario'])&&
            isset($_POST['senha'])&&
            isset($_POST['opcao']))
    {
        if(empty($_POST['nome'])||
                empty($_POST['email'])||
                empty($_POST['usuario'])||
                empty($_POST['senha']))
        {
            echo "<script type='text/javascript'> alert ('nao deixe os campos em branco ');</script>";
        }
        else 
        {               
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $opcao = $_POST['opcao'];
        
        $u = new Usuarios();

            switch ($opcao)
            {
                case "Inserir":
                    $resultado = $u->Inserir($nome, $usuario, $email, $senha);
                    if($resultado == 1)
                    {                                               
                        echo "<script type='text/javascript'> "
                                 ."alert('Inserido com Sucesso'); "
                                . "window.location.href='http://localhost/Projeto-finalAcademia/AreaAdministrativa/Usuarios.php';"
                             ."</script>";
                    }
                    else
                    {
                         echo "<script type='text/javascript'> alert ('Deu Ruim!');window.location.href='http://localhost/Projeto-finalAcademia/AreaAdministrativa/Usuarios.php';</script>";
                    }
                break;

                case "Atualizar":
                    $resultado = $u->Atualizar($id, $nome, $email, $usuario, $senha);

                    if($resultado == 1)
                    {
                        echo "<script type='text/javascript'> "
                                 ."alert('Sucesso'); "
                                . "window.location.href='http://localhost/Projeto-finalAcademia/AreaAdministrativa/Usuarios.php';"
                             ."</script>";
                    }
                    else
                    {
                       echo "<script type='text/javascript'> alert ('Deu Ruim!');window.location.href='http://localhost/Projeto-finalAcademia/AreaAdministrativa/Usuarios.php';</script>"; 
                    }
                break;                
            }
        }                
    }
    else if(isset($_GET['id']) && isset($_GET['opcao']))
    {
        if($_GET['opcao'] == "Deletar")
        {
            $id = $_GET['id'];
            $u = new Usuarios();
            $resultado = $u->Deletar($id);            
            
            if($resultado == 1)
            {
                echo "<script type='text/javascript'> "
                         ."alert('Sucesso');"
                        . "window.location.href='http://localhost/Projeto-finalAcademia/AreaAdministrativa/Usuarios.php';"
                     ."</script>";
            }
            else
            {
               echo "<script type='text/javascript'> alert ('Deu Ruim!');window.location.href='http://localhost/Projeto-finalAcademia/AreaAdministrativa/Usuarios.php';</script>";
            }
        }
    }
    











//    if(isset($_GET['id']) && isset($_GET['acao']))
//    {
//            $id = $_GET['id'];
//            $acao = $_GET['acao'];
//            
//            switch ($acao)
//            {
//                case "deletar":
//                    $u = new Usuarios();
//                    $resultado = $u->Deletar($id);
//                    
//                    if($resultado == 1)
//                    {
//                         echo "<script type='text/javascript'> alert ('Usuario removido com sucesso!');</script>";
//                         echo "<script type='text/javascript'> window.location.href='http://localhost/Projeto-finalAcademia/AreaAdministrativa/Usuarios.php';</script>";
//                    }
//                    else
//                    {
//                         echo "<script type='text/javascript'> alert ('erro ao remover o usuario');</script>";
//                    }
//                         
//                break;
//                    
//                    
//                case "editar":
//                    break;
//            }
//    }
//
//
//    if(isset($_POST['id'])&&
//           isset ($_POST['nome'])&&
//           isset ($_POST['email'])&&
//            isset ($_POST['usuario'])&&
//           isset ($_POST['senha']))
//    {
//
//        if(empty($_POST['nome'])||
//        empty($_POST['email'])||
//        empty($_POST['usuario'])||
//        empty($_POST['senha']))
//        {
//            echo "<script type='text/javascript'> alert ('nao deixe os campos em branco ');</script>";
//        }
//        else
//        {
//            $id = $_POST['id'];
//            $nome = $_POST['nome'];  
//            $email= $_POST['email'];  
//            $usuario = $_POST['usuario'];  
//            $senha = $_POST['senha'];  
//            
//            $u = new Usuarios();
//            
//            $resultado = $u->Inserir($nome, $usuario, $email, $senha);
//            
//           if($resultado == true)
//           {
////               header("Location: http://localhost/Projeto-finalAcademia/AreaAdministrativa/Usuarios.php");
//               echo "<script type='text/javascript'> alert ('Cadastro realizado com sucesso ');</script>";
//           }
//           else
//           {
//               echo "<script type='text/javascript'> alert ('deu ruim');</script>";
//           }
//        }        
//    }
    


