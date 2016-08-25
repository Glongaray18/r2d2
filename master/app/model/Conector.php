<?php

interface Conector{

   public function criar(Tarefa $tarefa);
   public function getTarefas();
   public function atualizar(Tarefa $tarefa);   
   public function recuperar($codigo);
}


?>
