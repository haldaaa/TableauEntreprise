<?php
  # Variables global
  $servername='mysql:dbname=tableau;host=127.0.0.1';
  $username='root';
  $password='';
  $dbname="tableau";

// Solution valide également ==  $connexion = new PDO($servername, $username, $password);

  try{
   $connexion = new PDO($servername, $username, $password);
    }catch(PDOException $e){
   die('Erreur : '.$e->getMessage());
}

   # Requête pour afficher les commercials dans le select du fichier form.php

   $nom_commercial = $connexion -> query("SELECT prenom FROM commercial") ;
   $nom_commercial2 = $nom_commercial -> fetchAll();


   # Requête pour afficher les villes dans le select du fichier form.php

   $ville = $connexion -> query("SELECT ville FROM ville");
   $ville2 = $ville -> fetchAll();

   ## Traitement formulaire_tableau

   # On initialise les variables pour eviter d'avoir l'erreur :Notice: Undefined index
   $date="";
   $code_produit="";
   $libelle_produit="";
   $montant_HT="";
   $montant_AT="";
   $nom_commercial="";
   $secteur="";



   ## On test les données dans le formulaire_tableau




   // Je ne sais pas si j'ai besoin du code ci dessous

   // if(isset($_POST['date'], $_POST['code_produit'], $_POST['libelle_produit'], $_POST['montant_HT'], $_POST['montant_TC'], $_POST['nom_commercial'], $_POST['secteur']))
   // {
   //   $erreurs =[];
   //   if(empty($_POST['date']) || empty($_POST['code_produit']) || empty($_POST['libelle_produit']) || empty($_POST['montant_HT']) || empty($_POST['montant_TC']) || empty($_POST['nom_commercial']) || empty($_POST['secteur']))
   //   {
   //     $erreur[]= 'Merci de remplir tout les champs';
   //   }
   //     if ($erreurs)
   //      {
   //        foreach ($errreurs as $e)
   //        {
   //            echo "FOREACHHERE";
   //           echo htmlspecialchars($e), '<br/><br/>';
   //        }
   //
   //
   //     }
   //     else{
   //       $test=0;
   //     }
   // }





 ?>
