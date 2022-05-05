<?php
  echo "Yo";
  $servername='localhost';
  $username='root';
  $password='';

  $connexion= new mysqli($servername, $username, $password);

  if($connexion->connect_error){
    die('Erreur :' .$conn->connect_error);
    echo 'Connexion OK';
  }

 ?>
