<?php
 
namespace academia;

class Horario
{
    public function Listar()
    {
        try
        {
            $conexao = new \PDO("mysql:host=localhost; dbname=academia","root","");

            $sql = "SELECT horario FROM horarios";

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
    
    public function Atualizar($horario)
    {
        try
        {
            $conexao = new \PDO("mysql:host=localhost; dbname=academia","root","");
           
            $sql = "UPDATE horarios SET horario = :horario";
            
            $preparar = $conexao->prepare($sql);
            $preparar->bindValue(":horario", $horario);
            
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
//$horario = new Horario();
//$resultado = $horario->Atualizar('hora do show');
//echo $resultado;