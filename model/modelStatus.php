<?php
class modelStatus{
   public function listarStatus(){
       try{
           $pdo = Database::conexao();
           $sql = $pdo->query("SELECT * FROM  tbl_status");
           $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
           return $resultado;  
       }catch(PDOException $e){
           return false;
       }
   }
   public function cadastrarStatus($descricao){
       try{
           $pdo= Database::conexao();
           $descricao_filtro = htmlspecialchars($descricao, ENT_QUOTES);
           $prepare = $pdo->prepare("INSERT INTO tbl_status (descricao)  VALUES (:descricao)");
           $prepare->bindParam("descricao",$descricao_filtro );
           $prepare->execute();
           return true;
       }catch(PDOException $e){
           return false;
       }
   }
   public function excluirStatus($id_status){
       try{
           $pdo= Database::conexao();
           $prepare = $pdo->prepare("DELETE FROM tbl_status WHERE id_status = :id_status");
           $prepare->bindParam("id_status",$id_status);
           $prepare->execute();
           return true;
       }catch(PDOException $e){
           return false;
       }
   }
}

?>