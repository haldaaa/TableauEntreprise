<?php
  # Variables global
  $servername='localhost';
  $username='root';
  $password='';

  # Connexion BDD
  $connexion= new mysqli($servername, $username, $password);

  if($connexion->connect_error){
    die('Erreur :' .$conn->connect_error);
    echo 'Connexion OK';
  }

   # Requête pour afficher les commercials dans le select du fichier form.php

 ?>
