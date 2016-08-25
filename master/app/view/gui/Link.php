<?php

require_once 'view/gui/Component.php';

/*
Implementação do elemento(tag) do html que representa na tela do usuário um botão
*/

class Link extends Component{
    /*
    Constroi o objeto que representa um botão na tela
    */
    public function __construct($href){
      parent::__construct();
      
      $this->adicionarAtributo('href',$href);
    }

    //inserir/desenhar a tag na tela
    public function inserir(){
        return sprintf('<a%s>%s</a>',$this->inserirAtributos(),$this->inserirTudo());
        //ex.: resultado
        /*
        <button class="cor" type="submit"><b></b></button>
        */
    }
}
