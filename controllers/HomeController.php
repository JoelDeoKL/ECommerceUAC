<?php

//require_once 'ressources/inc/navbar.php';
require_once("entities/Users.php");
require_once("models/UsersModel.php");

class HomeController extends x_Controller{

    public function index(){

        $users = new Users(null, null, null, null, null, null, null, null, null, null);
        $data = new UsersModel();
        $resultats = $data->affiche($users);

        $this->load->view("home", compact("resultats"));
    }
}