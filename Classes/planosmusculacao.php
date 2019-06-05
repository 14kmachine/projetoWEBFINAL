<?php

namespace academia;

class PlanosMusculacao
{
    public function Listar()
    {
        try
        {
            $conexao = new \PDO("mysql:host=localhost; dbname=academia","root","");

            $sql = "SELECT diario, semanal, quinzenal, mensal, trimenstral FROM planosmusculacao";

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
    
    public function Atualizar($diario, $semanal, $quinzenal, $mensal, $trimenstral)
    {
        try
        {
            $conexao = new \PDO("mysql:host=localhost; dbname=academia","root","");
           
            $sql = "UPDATE planosmusculacao SET diario = :diario, semanal = :semanal, quinzenal = :quinzenal, mensal = :mensal, trimenstral = :trimenstral";
            
            $preparar = $conexao->prepare($sql);
            $preparar->bindValue(":diario", $diario);
            $preparar->bindValue(":semanal", $semanal);
            $preparar->bindValue(":quinzenal", $quinzenal);
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
//$planosmusculacao = new PlanosMusculacao();
//$resultado = $planosmusculacao->Atualizar('15','20','30','41','150');
//echo $resultado;

//TESTE do metodo Listar
//$p = new PlanosMusculacao();
//$resultado =  $p->Listar();
//print_r($resultado);