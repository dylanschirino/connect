<?php
/**
 * File: AuthController.php
 * User: Dylan Schirino
 * Date: 28/04/16
 * Time: 16:19
 */
namespace Controllers;

use Models\User;

class AuthController{

    private $user_model=null;

    public function __construct(User $user){
        $this->user_model=$user;
    }
    public function getLogin(){
        return['view'=>'login.php','ressource_title'=>'User login'];
    }
    public function getRegister(){
        return['view'=>'register.php','ressource_title'=>'register new user'];
    }
}