<?php
class user{
    // melakukan registrasi properti global
   public $id,$name,$email,$address,$role;

//    // construct nilai default
//    function __construct(){
//     $this->id=1;
//     $this->name="kachau";
//     $this->email="kachau@example.com";
//     $this->address="batam";
//     $this->role="admin";



      
   //    }


    // constructor dengan variable parameter 
     public function __construct($id,$name,$email,$address,$role){
    $this->id=$id;
    $this->name=$name;
    $this->email=$email;
    $this->address=$address;
    $this->role=$role;
    
   


      
   }











}


?> 