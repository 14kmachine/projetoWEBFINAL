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

            $resultado = $preparar->execute();

            if($resultado == true)
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
            return false;
        }
    }
}

//$u = new Usuarios();
//$resultado = $u->Inserir("anderson serrano1", "adnderson", "anderson@adn.com.br", "1234");
//echo $resultado;

//teste metodo login
//$u = new Usuarios();
//$resultado = $u->Login('admin', 'admin');
//echo $resultado;
