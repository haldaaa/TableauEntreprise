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
        <form>
          <div class="form-group col-md-3 mx-auto">
            <div class="form-group">
              <label for="date_commande">Date de la commande</label>
                <div class="datepicker date input-group shadow-sm">
                  <input type="text" placeholder="Choisir une date" class="form-control py-2 px-2" id="date_commande">
                    <div class="input-group-append"><span class="input-group-text px-4"><i class="fa fa-calendar"></i></span></div>
                </div>
             </div>
            </div> <br>

          <div class="form-group col-md-3 mx-auto">
            <label for="exampleInputPassword1">Code produit</label>
            <input type="number" class="form-control" id="code_produit" placeholder="123456">
          </div> <br>

          <div class="form-group col-md-3 mx-auto">
            <label for="exampleInputPassword1">Libellé produit</label>
            <input type="text" class="form-control" id="libellé_produit" placeholder="Formation, prestation, service...">
          </div> <br>

          <div class="form-group col-md-3 mx-auto">
            <label for="exampleInputPassword1">Montant HT</label>
            <input type="number" class="form-control" id="montant_ht" placeholder="60000">
          </div> <br>

          <div class="form-group col-md-3 mx-auto">
            <label for="exampleInputPassword1">Montant TC</label>
            <input type="number" class="form-control" id="montant_tc" placeholder="">
          </div> <br>

          <div class="form-group col-md-3 mx-auto">
            <label for="exampleInputPassword1">Nom Commercial</label>
            <input type="number" class="form-control" id="montant_tc" placeholder="">
          </div> <br>



          <div class="form-group form-check mx-auto">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>



    </div>
    <span id="id_cible">Survoler ici</span>

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
