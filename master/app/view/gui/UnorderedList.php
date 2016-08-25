<?php

require_once 'view/gui/Component.php';

/*
Implementação do elemento(tag) do html que representa na tela do usuário um botão
*/

class UnorderedList extends Component{

    public function __construct(){
         parent::__construct();
    }

    //inserir/desenhar a tag na tela
    public function inserir(){
        return sprintf('<ul%s>%s</ul>',$this->inserirAtributos(),$this->inserirTudo());
        //ex.: resultado
        /*
        <ul class="cor"><li></li></button>
        */
    }
}
