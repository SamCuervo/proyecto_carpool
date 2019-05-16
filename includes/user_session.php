<?php

class UserSession{

    public function __construct(){
        session_start();
    }

    public function setCurrentUser($mail){
        $_SESSION['correo'] = $mail;
    }

    public function getCurrentUser(){
        return $_SESSION['mail'];
    }

    public function closeSession(){
        session_unset();
        session_destroy();
    }
}

?>