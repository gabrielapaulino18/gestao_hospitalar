<?php
class controllerStatus{
   public function listarStatus(){
       try{
           $modelStatus = new modelStatus();
           return $modelStatus->listarStatus();
       }catch(PDOException){
           return false;
       }
   }
   public function cadastrarStatus($descricao){
       try{
           $modelStatus = new modelStatus();
           return $modelStatus->cadastrarStatus($descricao);
       }catch(PDOException $e){
           return false;
       }
   }
   public function excluirStatus($id_status){
       try{
           $modelStatus = new modelStatus();
           return $modelStatus->excluirStatus($id_status);
       }catch(PDOException $e){
           return false;
       }
   }
}

?>