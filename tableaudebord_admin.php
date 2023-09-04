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
    
<?php
// Inclure le fichier de connexion à la base de données
include("connexion.php"); 

// Récupérer les données de la table "Apprenant"
$sql = "SELECT * FROM `apprenant` ORDER BY `prenom` asc";
$result = $conn->query($sql);

$conn->close();
?>
      
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
            <a class="nav-link"href="ajouter_apprenant.php">
              <span data-feather="file"></span>
             Ajouter un apprenant
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
      <h2>Liste des apprenants</h2>
      <div class="table-responsive">
      <table class="table table-striped table-sm">
      <thead>
      <tr> 
      <tbody>      
          
<?php
            if ($result->num_rows > 0) {
    echo "
    
      <th scope='col'>#ID</th>
      <th scope='col'>Prénom</th>
      <th scope='col'>Nom de famille</th>
      <th scope='col'>Reférenciel</th>
      <th scope='col'>Actions</th>
    </tr>
  </thead>";

    while ($row = $result->fetch_assoc()) {
        echo "

        
            <tr>
            <td>" . $row["idapprenant"] . "</td>
            <td>" . $row["prenom"] . "</td>
            <td>" . $row["nom"] . "</td>
            <td>" . $row["referenciel"] . "</td>
            <td>
                    <a href='modifier_apprenant.php?id=" . $row["idapprenant"] . "'>Modifier</a> |
                    <a href='supprimer.php?id=" . $row["idapprenant"] . "'>Supprimer</a>
                </td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "Aucun apprenant enregistré en base de données.";
}

?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>

</body>
</html>