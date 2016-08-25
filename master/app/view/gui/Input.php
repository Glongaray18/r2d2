<?php

require_once 'view/gui/Component.php';

/*
Implementação do elemento(tag) do html que representa na tela do usuário um botão
*/

class Input extends Component{
    /*
    Constroi o objeto que representa um botão na tela
    */
    public function __construct($name, $type='text'){
      parent::__construct();
      
      $this->adicionarAtributo('name',$name);
      $this->adicionarAtributo('type',$type);
      //$this->adicionarAtributo('style',$css);      
    }

    //inserir/desenhar a tag na tela
    public function inserir(){
        return sprintf('<input%s />',$this->inserirAtributos());
        //ex.: resultado
        /*
        <input name="telefone" type="text" /> 
        */
    }
}
