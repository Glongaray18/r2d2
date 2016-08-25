<?php
require_once 'model/Tarefa.php';

/*
** Repositorio.php 
** Classe que implementa as regras de negócio referente a listagem de tarefas
** author: Rodrigo Warzak 
** dtCreate: 11/08/2016
*/
class Repositorio{

   /* @var conector */
   private $conector;
   
   /* Controi o objeto que representa o repositorio 
      @param $conector, que permite conectar com o sistema de  armazenamento de tarefas     
   */
   public function __construct(Conector $conector){
      $this->conector = $conector;
   }
   
   /* Obtem a listagem de tarefas 
      @return array
   */
   public function getListaTarefa(){
      return $this->conector->getTarefas();
   }
   
   /*
    Recuperar a tarefa que será editada/modificada
    @return Tarefa   
   */
   public function getTarefaCorrente(){
      if($_POST){
         $post = filter_input_array(INPUT_POST, 
         array(
         'fNome'=>FILTER_SANITIZE_STRING,
         'fDescricao'=>FILTER_SANITIZE_STRING,
         'fStatus'=>FILTER_SANITIZE_STRING
         ));
         
         //se atualizando a tarefa
         if(isset($_POST['codigo'])){
            //obter a tarefa pelo codigo
            $tarefa = $this->conector->recuperar($_POST['codigo']);
            //modificar os dados da tarefa
            $tarefa->setNome($post['fNome']);
            $tarefa->setDescricao($post['fDescricao']);      
            $tarefa->setStatus($post['fStatus']); 
            //atualizar(UPDATE) a tarefa na base
            $this->conector->atualizar($tarefa);        
         }else{
            //se estiver criando uma nova tarefa
            $tarefa = new Tarefa();
            $tarefa->setNome($post['fNome']);
            $tarefa->setDescricao($post['fDescricao']);      
            $tarefa->setStatus($post['fStatus']);                  
            //criar(INSERT) a tarefa na base
            $this->conector->criar($tarefa);         
         }       
      }//end if $_POST
   return $tarefa;
   }//end function getTarefaCorrente
}//class Repositorio
   
   
   
   
   
   
   
   
   
   

}
