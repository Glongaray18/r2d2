<?php

/*
Implementação do elemento(tag) do html que representa na tela do usuário um botão
*/

class Button extends Component{
    /*
    Constroi o objeto que representa um botão na tela
    */
    public function __construct($label){
      parent::__construct();
      
      $this->adicionarFilho(new Text($label));
      

    }

    //inserir/desenhar a tag na tela
    public function inserir(){
        return sprintf('<button%s>%s</button>',$this->inserirAtributos(),$this->inserirTudo());

        //ex.: resultado
        /*
        <button class="cor" type="submit"><b></b></button>
        */
    }
}
