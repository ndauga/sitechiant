<?php

include_once "cnxBDD.php";

function getUsers(){
    $resultat = array();
    $cnx = connexionPDO();
    $req = $cnx->prepare("select id, nom, prenom, email from User");
    $req->execute();

    $ligne = $req->fetch(PDO::FETCH_ASSOC);
    while ($ligne) {
        $user = new User($ligne['id'], $ligne['nom'], $ligne['prenom'], $ligne['email'],);
        array_push($resultat, $user);
        $ligne = $req->fetch(PDO::FETCH_ASSOC);
    }
    return $resultat;
}

function insertUser(int $id, string $name, string $surname, string $email){
    $resultat = false;

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("insert into User (pseudo, mail, mdp) values('$id','$name','$surname', '$email');");
        $req->execute();
        $resultat = true;
    } catch (Exception $e) {
        $resultat = false;
    }
    return $resultat;
}
?>