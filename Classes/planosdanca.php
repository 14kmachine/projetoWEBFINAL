<?php

namespace academia;

class PlanosDanca
{
    public function Listar()
    {
        try
        {
            $conexao = new \PDO("mysql:host=localhost; dbname=academia","root","");

            $sql = "SELECT mensal, trimenstral FROM planosdanca";

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
    
    public function Atualizar($mensal, $trimenstral)
    {
        try
        {
            $conexao = new \PDO("mysql:host=localhost; dbname=academia","root","");
           
            $sql = "UPDATE planosdanca SET mensal = :mensal, trimenstral = :trimenstral";
            
            $preparar = $conexao->prepare($sql);
       
            $preparar->bindValue(":mensal", $mensal);
            $preparar->bindValue(":trimenstral", $trimenstral);
            
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
//$planosmusculacao = new PlanosDanca();
//$resultado = $planosmusculacao->Atualizar('41','150');
//echo $resultado;

//TESTE do metodo Listar
//$p = new PlanosDanca();
//$resultado =  $p->Listar();
//print_r($resultado);


