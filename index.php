<h1>Le Site gentil</h1>
<form action="" method="post" class="form-example">
  <div class="form-example">
    <label for="name">Nom: </label>
    <input type="text" name="name" id="name" required />
  </div>
  <div class="form-example">
    <label for="surname">Prenom: </label>
    <input type="text" name="surname" id="surname" required />
  </div>
  <div class="form-example">
    <label for="email">Email: </label>
    <input type="email" name="email" id="email" required />
  </div>
  <div class="form-example">
    <input type="submit" value="Envoyer" />
  </div>
</form>

<a href="userView.php">Voir Utilisateurs</a>

<?php

include "model/interactBDD.php";

if(isset($_POST["name"])){
    insertUser($_POST["name"], $_POST["surname"], $_POST["email"] );
}


?>