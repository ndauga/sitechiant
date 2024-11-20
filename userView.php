<h1>Le Site gentil</h1>
<h2>liste des utilisateurs</h2>

<?php
include "model/interactBDD.php";

$lesUsers = getUsers();
foreach($lesUsers as $user){
    $resstring = "".$user->id." ".$user->name." ".$user->surname." ".$user->email."</br>" ;
    echo($resstring);
}
?>

<a href="index.php">Voir Utilisateurs</a>