<?php
  # Variables global
  $servername='mysql:dbname=tableau;host=127.0.0.1';
  $username='root';
  $password='';
  $dbname="tableau";

  $connexion = new PDO($servername, $username, $password);


   # Requête pour afficher les commercials dans le select du fichier form.php

   $nom_commercial = $connexion -> query("SELECT prenom FROM commercial") ;
   $nom_commercial2 = $nom_commercial -> fetchAll();




   // foreach($nom_commercial2 as $row)
   //                      {
   //                          //print_r($row);
   //                          echo $row[0] ;
   //                      }

   // echo "Im php";
 ?>
