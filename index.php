<?php
include_once 'includes/user.php';
include_once 'includes/user_session.php';


$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['mail'])){
    //echo "hay sesion";
    $user->setUser($userSession->getCurrentUser());
    include_once 'vistas/blank.php';

}else if(isset($_POST['correo']) && isset($_POST['clave'])){
    
    $mailForm = $_POST['correo'];
    $passForm = $_POST['clave'];

    $user = new User();
    if($user->userExists($mailForm, $passForm)){
        //echo "Existe el usuario";
        $userSession->setCurrentUser($mailForm);
        $user->setUser($mailForm);

        include_once 'vistas/blank.php';
    }else{
        //echo "No existe el usuario";
        $errorLogin = "Nombre de usuario y/o password incorrecto";
        include_once 'vistas/Login.html';
    }
}else{
    //echo "login";
    include_once 'vistas/Login.html';
}



?>