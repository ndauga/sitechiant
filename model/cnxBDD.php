<?php

//TODO Params connexions
function connexionPDO() {
    $login = "root";
    $mdp = "root";
    $bd = "clientchiant";
    $serveur = "127.0.0.1:3306";
$rac = dirname(__FILE__); 
    try {
        $conn = new PDO("mysql:host=$serveur;dbname=$bd", $login, $mdp, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')); 
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        return "ERR Connection DB fail";
    }
}
?>
