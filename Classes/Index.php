<?php
 
namespace academia;

class IndexADM
{
    public function Listar()
    {
        try
        {
            $conexao = new \PDO("mysql:host=localhost; dbname=academia","root","");

            $sql = "SELECT texto FROM inicialadm";

            $preparar = $conexao->prepare($sql);
            $preparar->execute();

            $resultado = $preparar->fetch(\PDO::FETCH_OBJ);

            return $resultado;
        }
        catch (\PDOException $e)
        {
            throw new Exception("Ops... Erro: "+$e->getMessage());
        }

    }
    
    public function Atualizar($texto)
    {
        try
        {
            $conexao = new \PDO("mysql:host=localhost; dbname=academia","root","");
           
            $sql = "UPDATE inicialadm SET texto = :texto";
            
            $preparar = $conexao->prepare($sql);
            $preparar->bindValue(":texto", $texto);
            
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
            echo "Erro: ".$e->getMessage();
            return false;
        }
    }
}


//Teste do método Atualizar
//$inicialadm = new IndexADM();
//$resultado = $inicialadm->Atualizar('olaaa');
//echo $resultado; 


