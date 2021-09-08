<?php

require_once "conexao.php";
class categoria
{
   public $nome;

   public function listarTodos(){
       try{
           $bd = new conexao();
           $con = $bd->conectar();
           $sql = $con->prepare( statement "select * from categorias");
           $sql->execute();
           
           if($sql->rowCount() > 0){
              return $result = $sql->fetchAll (fetch_style: PDO: :FETCH_CLASS);
           }

       }catch(PDOException $msg){
           echo "Não foi possível listar as categorias : ".$msg->getMessage();
       }

    }
 
}    
