<?php

namespace academia;

class Usuarios
{

    public function Inserir($nome, $usuario, $email, $senha)
    {
        try
        {
            $conexao = new \PDO("mysql:host=localhost; dbname=academia","root","");

            $sql = "INSERT INTO usuarios (nome, usuario, email, senha) values (:nome, :usuario, :email, :senha)";

            $preparar = $conexao->prepare($sql);
            $preparar->bindValue(":nome", $nome);
            $preparar->bindValue(":usuario", $usuario);
            $preparar->bindValue(":email", $email);
            $preparar->bindValue(":senha", $senha);

            $resultado = $preparar->execute();

            if($resultado === true)
            {
                
                return true;
            }
            else
            {
                return false;
            }
        }
        catch (\PDOException $e)
        {
            echo "Erro: ".$e->getMessage();
            return false;
        }
        
    }
    public function Login($usuario, $senha)
    {
        try
        {
            $conexao = new \PDO("mysql:host=localhost; dbname=academia","root","");

            $sql = "SELECT count(*) FROM usuarios WHERE usuario = :login AND senha = :senha";
            $preparar = $conexao->prepare($sql);

            $preparar->bindValue(":login", $usuario);
            $preparar->bindValue(":senha", $senha);

            $senhaCriptografada = sha1($senha);
            $preparar->bindValue(":senha", $senhaCriptografada);

            $preparar->execute();
            $resultado = $preparar->fetch();

            if($resultado[0] == 1)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        catch (\PDOException $e)
        {
            throw new Exception("Ocorreu um ERRO: "+$e);
           
        }
    }
        public function ListarTodos()
    {
        try
        {
                $conexao = new \PDO("mysql:host=localhost; dbname=academia","root","");

                $sql = "SELECT * FROM usuarios";

                $preparar = $conexao->prepare($sql);
                $preparar->execute();

                $resultado = $preparar->fetchAll(\PDO::FETCH_OBJ);

                return $resultado;
        }
        catch (\PDOException $e)
        {
            throw new Exception("Ops... Erro: "+$e->getMessage());
        }
    }
    
    public function Deletar($id)
    {
        try
        {
            $conexao = new \PDO("mysql:host=localhost; dbname=academia","root","");

            $sql = "DELETE FROM usuarios WHERE id = :id";

            $preparar = $conexao->prepare($sql);
            $preparar->bindValue(":id", $id);

            $resultado = $preparar->execute();

            if($resultado == 1)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
            catch (\PDOException $e)
            {
                throw new Exception("Ops... ".$e->getMessage());
            
            }
    }
     public function Atualizar($id, $nome, $email, $usuario, $senha)
    {
        try
        {
        


            $conexao = new \PDO("mysql:host=localhost; dbname=academia","root","");

            $sql = "UPDATE usuarios SET nome = :nome, email = :email, usuario = :usuario, senha = :senha WHERE id = :id";

            $preparar = $conexao->prepare($sql);
            $preparar->bindValue(":id", $id);
            $preparar->bindValue(":nome", $nome);
            $preparar->bindValue(":email", $email);
            $preparar->bindValue(":usuario", $usuario);

            $senhaCriptogafada = sha1($senha);
            $preparar->bindValue(":senha",$senhaCriptogafada);

            $resultado = $preparar->execute();

            if($resultado == 1)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        catch (\PDOException $e)
        {
            throw new Exception("ihhh... deu ruim".$e->getMessage());
        }
    }
}


// MEUS TESTES

//$u = new Usuarios();
//$resultado = $u->Inserir("anderson serrano1", "adnderson", "anderson@adn.com.br", "1234");
//echo $resultado;

//teste metodo login
//$u = new Usuarios();
//$resultado = $u->Login('admin', 'admin');
//echo $resultado;

//teste do metodo ListarTodos
//$u = new Usuarios();
//$u->ListarTodos();

////teste do metodo Deletar
//$u = new Usuario();
//$resultado = $u->Deletar(5);
//echo $resultado;
//
//////Teste do metodo Atualizar
//$u = new Usuarios();
//$resultado = $u->Atualizar(14, '$nome', '$email', '$usuario', '$senha');
//echo $resultado;