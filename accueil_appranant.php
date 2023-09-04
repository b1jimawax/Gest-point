<!DOCTYPE html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs du formulaire (id et prénom de l'apprenant)
    $idapprenant = $_POST["idapprenant"];
    $prenom = $_POST["prenom"];

    // Ici, tu devrais effectuer la logique d'authentification avec les valeurs fournies

        include("connexion.php");

        // Enregistrer l'heure de connexion
        $heure_de_connexion = date("Y-m-d H:i:s");
        $sql = "INSERT INTO Connexion (idapprenant,heure_de_connexion) VALUES ('$idapprenant', '$heure_de_connexion')";

        if ($conn->query($sql) === TRUE) {
            
        } else {
            echo "Erreur : " . $sql . "<br>" . $conn->error;
        }
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Connexion Apprenant</title>
</head>
<body style=background-color:#002731;>

    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3" style=color:#fff;>Gest-POINT</h1>
        <p class="col-lg-10 fs-4" style=color:#fff;>Bienvenu sur l'espace reservé à l'apprenant. 
        Veuillez pointer en matinée de (6h30-8h30) & en soirée de (18h30-19h30)</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        
        <form method="POST" action="" class="p-4 p-md-5 border rounded-3 bg-light">
        <strong class="text-muted" >Connexion Apprenant</strong><br><br>
          <div class="form-floating mb-3">
            <input type="text" name="idapprenant" required class="form-control" id="floatingInput" placeholder="Identifient">
            <label for="floatingInput">Identifient</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" name="prenom"  class="form-control" id="floatingPassword" placeholder="Votre prenom">
            <label for="floatingPassword">Votre prénom <i>(facultatif)</i></label>
          </div>
         
          <button class="w-100 btn btn-lg  btn-success" type="submit">Pointer</button>
          <hr class="my-4">
          <small class="text-muted"><a href="espaceAdmin.php">Se connecter en tant d'administrateur ?</a></small>
        </form>
      </div>
    </div>
  </div>
</body>
</html>