<?php

class User {
    // melakukan registrasi properti GLOBAL
    public $id, $name, $email, $address, $role;

    // membuat func constructor
    public function __construct()
    {
        $this->id = 1;
        $this->name = "Yutub";
        $this->email = "Yutub@gmail.com";
        $this->address = "Batam";
        $this->role = "admin";
    }
        
}
