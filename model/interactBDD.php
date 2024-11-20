<?php

include_once "cnxBDD.php";
include_once "User.php";

function getUsers(){
    $resultat = array();
    $cnx = connexionPDO();
    $req = $cnx->prepare("select id, nom, prenom, mail from User");
    $req->execute();

    $ligne = $req->fetch(PDO::FETCH_ASSOC);
    while ($ligne) {
        $user = new User($ligne['id'], $ligne['nom'], $ligne['prenom'], $ligne['mail'],);
        array_push($resultat, $user);
        $ligne = $req->fetch(PDO::FETCH_ASSOC);
    }
    return $resultat;
}

function insertUser(string $name, string $surname, string $email){
    $resultat = false;

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("insert into User (nom, prenom, mail) values('$name','$surname', '$email');");
        $req->execute();
        $resultat = true;
    } catch (Exception $e) {
        var_dump($e);
        $resultat = false;
    }
    return $resultat;
}
?>