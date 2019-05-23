<?php
    namespace academia;
    include './Classes/Usuarios.php';
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
        <!-- EMMET: div#login>h1+(p+input)*2+input*2 -->
        <div id="login" >
            <form action="#" method="POST">
                <h1>Area Administrativa</h1>
                <p>Digite seu login</p>
                <input placeholder="Digite seu login" type="text" name="usuario">
                <p>Digite sua senha</p>
                <input placeholder="*****" type="password" name="senha">
                <br>
                <br>
                <input class="btn btn-success" type="submit" value="ENTRAR">
                <input class="btn btn-danger" type="reset" value="LIMPAR">
            </form>
        </div>
    </body>
    
</html>

<?php
    if(isset($_POST['usuario']) && isset($_POST['senha']))
    {
        if(empty($_POST['usuario']) || empty($_POST['senha']))
        {
            echo "<script type='text/javascript'> alert ('Não deixe os campos em branco');</script>";
        }
        else
        {
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];
            
            $u = new Usuarios();
            $resultado = $u->Login($usuario, $senha);
            
            if($resultado == true)
            {
                //entra na area adm
                header("Location: http://localhost/Projeto-finalAcademia/AreaAdministrativa");
                 
            }
            else
            {
                echo "<script type='text/javascript'> alert ('Usuario e/ou senha incorretos');</script>";
            }
        }
    }
?>


