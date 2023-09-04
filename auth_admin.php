<?php
//catte fonction permet d'ouvrir un session dans l'application
session_start();

//cette ligne permet de connecter à la base de données mysql
include("connexion.php"); 

//ce script permet de recuperer les données enter par l'utilisater
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom_utilisateur = $_POST["nom_utilisateur"];
    $mot_de_passe = $_POST["mot_de_passe"];

    // Vérifier les informations d'authentification dans la base de données
    $sql = "SELECT * FROM administrateur WHERE nom_utilisateur = '$nom_utilisateur' AND mot_de_passe = '$mot_de_passe'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // L'administrateur est authentifié, enregistre une session par exemple
        $_SESSION["admin_logged_in"] = true;
        header("Location: tableaudebord_admin.php"); // Redirige vers la page du tableau de bord 
        exit();
    } else {
        echo "";
    }
}

// Fermer la connexion à la base de données
$conn->close();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap core CSS -->
     <link href="styles/css/bootstrap.min.css" rel="stylesheet">
    <title>Erreur d'authentification</title>
</head>
<body>
    <div class="container" style="padding-top:5%;">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
           Une erreur s'est produite cliker sur le lien suivant pour 
            <a href="espaceAdmin.php" class="alert-link">Recommencer</a>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
</body>
</html>