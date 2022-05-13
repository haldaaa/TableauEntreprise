
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/myCss.css">
    <title>My first React app (mais d'abord en php LOL!)</title>
  </head>
  <body>
    <?php include("php/connexionbdd.php")?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Acceuil </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="php/form.php">Remplir le formulaire</a>
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

        <div class="enonce">

          <h2>- Objectif ?? </h2>
            <p> Enoncé :<br>
              Créé liste de vente dans une grille avec : <br>
              <ol>
                <li>- date </li>
                <li>- code produit </li>
                <li>- libellée produit </li>
                <li>- montant HT </li>
                <li>- montant AT </li>
                <li>- nom du commercial </li>
                <li>- secteur </li>
              </ol> <br>
              Pour commencer, les données seront statiques dans une base. <br>
              Ensuite, on pourra créé un tableau en ajoutant nous même les données. <br>
              Enfin, reproduire le shéma en Javascript pour que les changement se fasse en direct
      </p> <br> <br> <br>

        </div>

        <h1> Premier tableau statique </h1>
        <div class="tableau_1">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">Commercial</th>
                <th scope="col">Code produit</th>
                <th scope="col">Libellé produit</th>
                <th scope="col">Montant HT</th>
                <th scope="col">Montant TC</th>
                <th scope="col">Secteur</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
