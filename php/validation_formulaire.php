<?php

echo "Validation  formulaire" ."</br>";


//echo $_POST['code_produit'] . "</br>" . strlen($_POST['code_produit']) . "</br>";

echo "La variable est :" . $_POST['code_produit'] . "</br>";
echo "La longeur est  :" . strlen($_POST['code_produit'])  . "</br>";


// Validation code produit
$countVar = strlen($_POST['code_produit']);

  if ($countVar > 6)
  {
    echo "Erreur ! La longeur est superieur a 6" . "</br>";
    echo "countvar =" . $countVar ;
  }
  if ($countVar <= 5) {
    echo "Erreur !La longeur est infreieur ou égal a 5" . "</br>";
    echo "countvar =" .$countVar;
  }
  else {
    echo " Parfait, la longeur est de 4";
  }


// Validation Libellé produit





?>
