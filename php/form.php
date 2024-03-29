<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">


    <!-- Appel de la Feuille de style minifiée De La librairie Bootstrap -->
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  	<!-- Appel de la Feuille de style minifiée De l'extension Datepicker -->
  	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  	<!-- Appel de la Bibliothèque Font Awesome -->
  	<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Appel de la ma page CSS -->
    <link rel="stylesheet" href="../css/myCss.css">

    <title>Remplir formulaire</title>

  </head>

  <body>
  <?php include("connexionbdd.php")?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
      <div class="container-fluid">
          <a class="navbar-brand" href="../myfirstreact.php">Acceuil </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Remplir le formulaire</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="content">
        <form name="formulaire_tableau" method="post" enctype="multipart/form-data" action="validation_formulaire.php">
          <div class="form-group col-md-3 mx-auto">
            <div class="form-group">
              <label for="date_commande">Date de la commande</label>
                <div class="datepicker date input-group shadow-sm">
                  <input type="text" placeholder="Choisir une date" class="form-control py-2 px-2" name="date_commande">
                    <div class="input-group-append"><span class="input-group-text px-4"><i class="fa fa-calendar"></i></span></div>
                </div>
             </div>
            </div> <br>

          <div class="form-group col-md-3 mx-auto">
            <label for="exampleInputPassword1">Code produit</label>
            <input type="number" class="form-control" id="code_produit" name="code_produit" maxlength=8 placeholder="123456">
          </div> <br>

          <div class="form-group col-md-3 mx-auto">
            <label for="libelle_produit">Libellé produit</label>
            <select name="libelle_produit" class="form-select " id="select_box">
              <option value="chene"> Chêne </option>
              <option value="peuplier"> Peuplier </option>
              <option value="hetre"> Hêtre </option>
            </select>
          </div> <br>

          <div class="form-group col-md-3 mx-auto montant_ht_div">
            <label for="exampleInputPassword1">Montant HT</label>
            <input type="number" value="0" class="form-control" name="montant_ht" placeholder="60000">
          </div> <br>

          <div class="form-group col-md-3 mx-auto" id="montant_tc_div">
            <label for="exampleInputPassword1">Montant TC</label>
            <input type="number" value="0" class="form-control" name="montant_tc" placeholder="">
          </div> <br>

          <div class="form-group col-md-3 mx-auto">
            <label for="exampleInputPassword1">Ville</label>
            <select name="select_ville" class="form-select " id="select_box">
                <option value="commercial">Ville </option>
                <?php
                  foreach($ville2 as $row)
                  {
                      print_r('<option value="'.$row[0].'"> '.$row[0].' </option>');
                  }
                ?>
            </select>
          </div> <br>

          <div class="col-md-3 mx-auto">
            <select name="select_commercial" class="form-select " id="select_box">
                <option value="commercial">Commercial </option>
                  <?php
                    foreach($nom_commercial2 as $row)
                      {
                        print_r('<option value="'.$row[0].'"> '.$row[0].' </option>');
                      }
                  ?>
              </select>
          </div> <br>

          <div class="form-group col-md-3 form-check mx-auto divSubmit">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>

        </form>



    </div>


    <!-- Extension jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Extension DATEPICKER -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <!-- Noyau JavaScript de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Script pour activation du datepicker -->
    <script type="text/javascript" src="../js/jquery.js"> </script>



  </body>
</html>
