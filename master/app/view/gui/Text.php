<?php

require_once 'view/gui/Component.php';
/*
Implementação do elemento(tag) do html que representa na tela do usuário um botão
*/

class Text extends Component{

    private $texto;
    /*
    Constroi o objeto que representa um botão na tela
    */
    public function __construct($texto){
      parent::__construct();
      
      $this->texto = $texto;
      

    }

    //inserir/desenhar a tag na tela
    public function inserir(){
        return $this->texto;

        //ex.: resultado
        /*
        <button class="cor" type="submit">OK</button>
        */
    }
}
