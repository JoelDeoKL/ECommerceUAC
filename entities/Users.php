<?php

class Users{

    private $id_user;
    private $title;
    private $fName;
    private $lName;
    private $email;
    private $password;
    private $adress1;
    private $adress2;
    private $mobile;

    public function __construct($id_user, $title, $fName, $lName, $email, $password, $adress1, $adress2, $mobile){
        $this->id_user = $id_user;
        $this->title = $title;
        $this->fName = $fName;
        $this->lName = $lName;
        $this->email = $email;
        $this->password = $password;
        $this->adress1 = $adress1;
        $this->adress2 = $adress2;
        $this->mobile = $mobile;
    }

    public function getIdUser() {
        return $this->id_user;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getFName() {
        return $this->fName;
    }

    public function getLName() {
        return $this->lName;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getAdress1() {
        return $this->adress1;
    }

    public function getAdress2() {
        return $this->adress2;
    }

    public function getmobile() {
        return $this->mobile;
    }

    public function setIdUser($id_user) {
        $this->id_user = $id_user;
    }

    public function setFistName($fName) {
        $this->fName = $fName;
    }

    public function setlName($lName) {
        $this->lName = $lName;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setAdress1($adress1) {
        $this->adress1 = $adress1;
    }

    public function setAdress2($adress2) {
        $this->adress2 = $adress2;
    }

    public function setAmobile($mobile) {
        $this->mobile = $mobile;
    }
}
