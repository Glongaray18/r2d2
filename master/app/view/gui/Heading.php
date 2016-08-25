<?php

require_once 'view/gui/Component.php';
require_once 'view/gui/Text.php';
/*
Implementação do elemento(tag) do html que representa na tela do usuário um botão
*/

class Heading extends Component{

    private $level;
    /*
    Constroi o objeto que representa um botão na tela
    */
    public function __construct($texto, $level=1){
      parent::__construct();
      
      $this->level = $level;
      $this->adicionarFilho(new Text($texto));
      //$this->adicionarAtributo('style',$css);      
    }

    //inserir/desenhar a tag na tela
    public function inserir(){
        return sprintf(
        '<h%d%s>%s</h%d>',
        $this->level, 
        $this->inserirAtributos(),
        $this->inserirTudo(),
        $this->level);
        
        //ex.: resultado
        //%d = level h1-6  <h1></h1>
        
    }
}
