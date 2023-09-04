<?php
session_start();

// Vérifier si l'administrateur est authentifié
if (!isset($_SESSION["admin_logged_in"]) || $_SESSION["admin_logged_in"] !== true) {
    header("Location: page_de_connexion_admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap core CSS -->
    <link href="styles/css/bootstrap.min.css" rel="stylesheet">
    <title>Tableau de Bord Administrateur</title>
</head>
<body>
      
<header style="background-color:#002731;" class="navbar navbar-dark sticky-top flex-md-nowrap p-2 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Gest-POINT</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="deconnexion_admin.php">Se déconnecter</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" style="background-color:#002731;position:fixed;height:500vh;" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
           
            </a>
          </li>
          <li class="nav-item" >
            <a class="nav-link"href="tableaudebord_admin.php">
              <span data-feather="file"></span>
             Liste des apprenants
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="listepointage.php">
              <span data-feather="shopping-cart"></span>
              Tableau de pointage
            </a>
          </li>
          

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        </h6>
        
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tableau de bord</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
          </div>
        </div>
      </div>
      <h2>Enregister un apprenant</h2>
      <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){

    $prenom=$_POST["prenom"];
    $nom=$_POST["nom"];
    $referenciel=$_POST["referenciel"];
   

    include("connexion.php");

    $sql = "insert into apprenant(prenom,nom,referenciel) 
    values('$prenom','$nom','$referenciel')";

    if($conn->query($sql)=== true){
        echo"apprenant enregistré avec succès dans la base de donnée";
    }
}
?>

    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <form method="POST" action="">
        <div class="bd-example">
        <p class="col-lg-10 fs-6">Ajouter un apprenant, ainsi il sera dans la base de donnée.</p>
        <div class="mb-3">
          <input class="form-control form-control-lg" type="text" placeholder="Prénom" name="prenom" required >
        </div>
        <div class="mb-3">
          <input class="form-control form-control-lg" type="text" placeholder="Nom" name="nom" required >
        </div>
        <div class="mb-3">
          <select class="form-select form-select-lg mb-3" name="referenciel" required >
            <option selected>Développeur web/web mobile</option>
            <option value="Réferent(e) Digital">Réferent(e) Digital</option>
          </select>
          </div>
            <button type="reset" class="btn btn-outline-danger">Annuler</button>
            <button type="submit" class="btn btn-success">Enregister</button>
          </fieldset>
          </form>
        </div>
      
      </div>
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>

</body>
</html>