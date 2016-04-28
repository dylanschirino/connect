<?php
/**
 * File: PageController.php
 * User: Dylan Schirino
 * Date: 28/04/16
 * Time: 15:26
 */
namespace Controllers;

class PageController extends Controller{

    public function home(){
        return ['view'=>'home.php','ressource_title'=>'Home Page'];
    }
    public function admin(){
        //on verifie sur l'utilisateur est bien connecter
        if(!isset($_SESSION['user'])){
            header('Location: ?a=getLogin&r=auth');
        }
        return ['view'=>'admin.php','ressource_title'=>'Admin Page'];
    }
}