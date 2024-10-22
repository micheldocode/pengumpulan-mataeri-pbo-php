<?php

class User{
    //Melakukan registrasi properti global
    public $id, $name, $email, $adress, $role;

    //Construct Nilai Default 
    public function __construct()
    {
        $this->id       = 1;
        $this->name     = "Asep";
        $this->email    = "asep@gmail.com";
        $this->adress   = "Bandung";
        $this->role     = "admin";
    }
}

?>