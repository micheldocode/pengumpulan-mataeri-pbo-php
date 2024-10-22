<?php

class User{
    //Melakukan registrasi properti global
    public $id, $name, $email, $address, $role;

    //Construct Nilai Default 
    // public function __construct()
    // {
    //     $this->id       = 1;
    //     $this->name     = "Asep";
    //     $this->email    = "asep@gmail.com";
    //     $this->address   = "Bandung";
    //     $this->role     = "admin";
    // }

    public function __construct( $id, $name, $email, $address, $role )
    {
        $this->id       = $id;
        $this->name     = $name;
        $this->email    = $email;
        $this->address  = $address;
        $this->role     = $role;
    }
}

?>