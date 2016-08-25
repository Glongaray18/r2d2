<?php
require_once "model/MySQL.php";
require_once "model/Repositorio.php";

/*
Controlador do sistema, responsável pelas ações do usuário e por decidir o que cada ação irá fazer
*/

class Application{
    /*
    start: responsável por iniciar o sistema e manipular cada ação do usuário    
    */
    public static function start(){
        $mysql = new MySQL('localhost', 'root', '', 'escola');
        $repositorio = new Repositorio($mysql);

        switch($acaoUsuario){
            case 'editar':
                if(isset($_GET['codigo'])){
                    $view = new FormView($repositorio);
                    $view->criarEditForm();
                }
        }

    }

}