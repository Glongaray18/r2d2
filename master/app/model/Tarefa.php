<?php
/*
** Tarefa.php 
** Classe que representa uma tarefa
** author: Rodrigo Warzak 
** dtCreate: 11/08/2016
*/

class Tarefa{
   /* @var integer */
   private $codigo;
   
   /* @var string */
   private $nome;  
   
   /* @var string */
   private $descricao;
   
   /* @var string */
   private $status;

   /* @var string */
   private $dataCriacao;

   /* @var string */
   private $dataModificacao;

   /* Recupera o valor do codigo da tarefa 
      @return integer  */
   public function getCodigo(){
      return $this->codigo;
   }
   
   /* Recupera o valor do nome da tarefa 
      @return string  */
   public function getNome(){
      return $this->nome;
   }
   
   /* Recupera o valor da descricao da tarefa 
      @return string  */
   public function getDescricao(){
      return $this->descricao;
   }

   /* Recupera o valor do status da tarefa 
      @return string  */
   public function getStatus(){
      return $this->status;
   }   

   /* Recupera o valor da data de criação da tarefa 
      @return string  */
   public function getDataCriacao(){
      return $this->dataCriacao;
   }   

  /* Recupera o valor da data de modificação da tarefa 
      @return string  */
   public function getDataModificacao(){
      return $this->dataModificacao;
   }    
   
  /* @param integer codigo  */
   public function setCodigo($codigo){
      $this->codigo = $codigo;
   }     

  /* @param string nome  */
   public function setNome($nome){
      $this->nome = $nome;
   }     
   
  /* @param string descricao  */
   public function setDescricao($descricao){
      $this->descricao = $descricao;
   }     

  /* @param string status  */
   public function setStatus($status){
      $this->status = $status;
   }    
   
  /* @param string data da criação  */
   public function setDataCriacao($dataCriacao){
      $this->dataCriacao = $dataCriacao;
   } 

  /* @param string data da modificação  */
   public function setDataModificacao($dataModifiacacao){
      $this->dataModificacao = $dataModificacao;
   }    
}
