<?php

require_once 'view/gui/Component.php';

/*
Implementação do elemento(tag) do html que representa na tela do usuário um botão
*/

class Form extends Component{
    /*
    Constroi o objeto que representa um botão na tela
    */
    public function __construct($action, $method){
      parent::__construct();
      
      $this->adicionarAtributo('action',$action);
      $this->adicionarAtributo('method',$method);
      //$this->adicionarAtributo('style',$css);      
    }

    //inserir/desenhar a tag na tela
    public function inserir(){
        return sprintf('<form%s>%s</form>',$this->inserirAtributos(),$this->inserirTudo());
        //ex.: resultado
        /*
        <button class="cor" type="submit"><b></b></button>
        */
    }
}
