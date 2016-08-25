<?php
require_once 'model/Conector.php';

class MySQL implements Conector{
   private $pdo;
   
   public function __construct($host, $banco, $usuario, $senha){
   $this->pdo = new PDO(
      sprintf("mysql:host=%s;dbname=%s", $host, $banco),
      $usuario,
      $senha      
      );
   
   }
   
   public function criar(Tarefa $tarefa){
      $query = $this->pdo->prepare('INSERT INTO tarefas(nome, descricao, status, dataCriacao) VALUES(:bNome,:bDescricao,:bStatus,NOW());');
   
      $query->bindValue(':bNome', $tarefa->getNome());
      $query->bindValue(':bDescricao', $tarefa->getDescricao());
      $query->bindValue(':bStatus', $tarefa->getStatus());            

      if($query->execute()){
         $tarefa->setCodigo($this->pdo->lastInsertId());
         return true;
      }
      return false;   
   }
   
   public function getTarefas(){
      $query = $this->pdo->prepare("SELECT * FROM tarefas ORDER BY dataCriacao");
      $query->setFetchMode(PDO::FETCH_CLASS, 'tarefas');
      $query->execute();
      
      return $query->fetchAll(); 
   }


   public function recuperar($codigo){
    $query = $this->pdo->prepare("SELECT * FROM tarefas WHERE codigo=:bCodigo");
    $query->bindParam(":bCodigo", $codigo, PDO::PARAM_INT);
    $query->setFetchMode(PDO::FETCH_CLASS, 'tarefas');
    $query->execute();
    
    $tarefa = $query->fetch();

    $query->closeCursor();

    return $tarefa;

   }

   public function atualizar(Tarefa $tarefa){
    $query = $this->pdo->prepare(
        "UPDATE tarefas SET
            nome =:bNome,
            descricao =:bDescricao,
            status =:bStatus,
            dataModificacao =NOW()
        WHERE
            codigo=:bCodigo;");

    $query->bindParam(":bNome", $tarefa->getNome());
    $query->bindParam(":bDescricao", $tarefa->getNome());
    $query->bindParam(":bStatus", $tarefa->getStatus());
    $query->bindParam(":bCodigo", $tarefa->getCodigo());

    //retorna um boolean
    $return = $query->execute();
    $query->closeCursor();
    
    return $return;


   }

}//end class
