<?php

class Users{

    private $id_user;
    private $title;
    private $firstName;
    private $lastName;
    private $email;
    private $password;
    private $adresse1;
    private $adresse2;
    private $numeroTelephone;


    public function __construct($id_user, $title, $firstName, $lastName, $email, $password, $adresse1, $adresse2, $numeroTelephone){
        $this->id_user = $id_user;
        $this->title = $title;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->adresse1 = $adresse1;
        $this->adresse2 = $adresse2;
        $this->numeroTelephone = $numeroTelephone;
    }

    public function getIdUser() {
        return $this->id_user;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getAdresse1() {
        return $this->adresse1;
    }

    public function getAdresse2() {
        return $this->adresse2;
    }

    public function getNumeroTelephone() {
        return $this->numeroTelephone;
    }

    public function setIdUser($id_user) {
        $this->id_user = $id_user;
    }

    public function setFistName($firstName) {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setAdresse1($adresse1) {
        $this->adresse1 = $adresse1;
    }

    public function setAdresse2($adresse2) {
        $this->adresse2 = $adresse2;
    }

    public function setANumeroTelephone($numeroTelephone) {
        $this->numeroTelephone = $numeroTelephone;
    }
}
