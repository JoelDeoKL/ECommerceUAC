<?php

require_once("entities/Users.php");
require_once("models/x_models/MainModel.php");

class UsersModel extends MainModel{

    public function check(Users $users){

        $query = "SELECT * FROM users WHERE email=?";
        $sql = self::pdo()->prepare($query);

        $sql->execute([$users->getEmail()]);

        while ($data = $sql->fetch())
        {
            if(isset($data['email']) && isset($data['pseudo'])){
                //echo "true"; die();
                return true;
            }
        }
        //echo "false"; die();
        return false;
   }

    public function inscription(Users $users){

        $query = "INSERT INTO users SET title=?, fName=?, lName=?, email=?, mdp=?, ad";
        $sql = self::pdo()->prepare($query);

        if($sql->execute([$users->getTitle(),$users->getFName(), $users->getLName(), $users->getEmail(),
        $users->getPassword(), $users->getAddress1(), $users->getAddress2(), $users->getMobile()])){
            session_start();
            $_SESSION['nom'] = $users->getPseudo();
            header('location: index.php?kay=x-users.compte');
        }
        return false;

    }

    public function connexion(Users $users){

        $query = "SELECT * FROM users WHERE email=?";
        $sql = self::pdo()->prepare($query);

        $sql->execute([$users->getEmail()]);

        $data = $sql->fetch();

        $pasw = $users->getMdp();
        $pass = $data['mdp'];

        //if(password_verify($pasw, $pass)){
        if(isset($data["mdp"])){
            $_SESSION['nom'] = $data['pseudo'];
            return true;
        }else{
            return false;
        }
    }

    public function affiche(Users $users){
        $query = "SELECT * FROM users LIMIT 10";
        $sql = self::pdo()->prepare($query);

        $sql->execute();
        $donnees = $sql->fetchAll();
        return $donnees;
    }
}