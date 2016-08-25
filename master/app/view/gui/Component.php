<?php
/*
Definição de um componente de tela para o usuário. Essa classe é a base para a criação de qualquer componente de tela de usuário e tem como objetivo facilitar a inserção destes elementos nas telas do sistema

*/

class Component{

    //atributos de tags HMTL
    private $atributos;
    //tags dentro de outras tags
    private $filhos;
    
    //cria componente de tela com valores padrão
    public function __construct(){
        $this->atributos = array();
        $this->filhos = array();
    }

    //obtem componente de tela em formato string
    public function __toString(){
        return (string) $this->inserir();
    }

    //adiciona atributo a uma tag
    public function adicionarAtributo($nome, $valor){
        $this->atributos[$nome] = $valor;
    }

    //adiciona uma tag como filho/subtag
    public function adicionarFilho($filho){
        $this->filhos[] = $filho;

        return $filho;
    }
    
    //obtem o nro de filhos de um elemento html
    public function contador(){
      return count($this->filhos);
    }

    //inserir() desenha um elemeno html na tela do usuario
    public abstract function inserir();

    //desenha os filhos(subtags) dos elementos html
    protected function inserirTudo(){
      $filhos="";
      foreach($this->filhos as $filho){
         $filhos .= $filho;
      }      
      return $filhos;    
    }
    
    //desenha os atributos dos elementos html
    protected function inserirAtributos(){
      $atributos="";      
      foreach($this->atributos as $nome=>$valor){
         $atributos .= sprintf('%s="$s"',$nome, $valor);
      }      
      return $atributos;   
    } 
    
    //define o atributo class de um estilo CSS
    public function setClass($class){
      $this->adicionarAtributo('class', $class);
    }
    
    //define o atributo id de um elemento html
    public function setId($id){
      $this->adicionarAtributo('id', $id);
    }
    
    //exibe o componente na tela do usuario
    public function show(){
      echo $this;
    }
    
    
    
  


}

