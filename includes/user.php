<?php
include 'db.php';

class User extends DB{
    private $usuario;
    private $correo;


    public function userExists($mail, $pass){
        $md5pass = md5($pass);
        $query = $this->connect()->prepare('SELECT * FROM pasajeros WHERE correo = :mail AND clave = :pass');
        $query->execute(['mail' => $mail, 'pass' => $md5pass]);

        $query2 = $this->connect()->prepare('SELECT * FROM conductor WHERE correo = :mail AND clave = :pass');
        $query2->execute(['mail' => $mail, 'pass' => $md5pass]);


        if($query->rowCount()){
            return true;
        }elseif ($query2->rowCount()) {
            return true;
        }
    }


    public function setUser($mail){
        $query = $this->connect()->prepare('SELECT * FROM pasajeros WHERE correo = :mail');
        $query->execute(['mail' => $mail]);

        $query2 = $this->connect()->prepare('SELECT * FROM conductor WHERE correo = :mail');
        $query2->execute(['mail' => $mail]);
        
        foreach ($query as $currentUser) {
            $this->usuario = $currentUser['usuario'];
            $this->correo = $currentUser['correo'];
        }

        foreach ($query2 as $currentUser) {
            $this->usuario = $currentUser['usuario'];
            $this->correo = $currentUser['correo'];
        }
    }


    public function getNombre(){
        return $this->usuario;
    }
}

?>