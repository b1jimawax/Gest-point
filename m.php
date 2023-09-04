<?php
// Inclure le fichier de connexion à la base de données
include("connexion.php"); // Assure-toi de remplacer "connexion.php" par le chemin correct vers ton fichier de connexion

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $idapprenant = $_POST["idapprenant"];
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $referenciel = $_POST["referenciel"];

    // Requête SQL pour mettre à jour les données de l'apprenant
    $sql = "UPDATE apprenant SET prenom = '$prenom', nom = '$nom', referenciel = '$referenciel' WHERE idapprenant = $idapprenant";

    if ($conn->query($sql) === TRUE) {
        echo "Données de l'apprenant mises à jour avec succès";
    } else {
        echo "Erreur : " . $sql . "<br>" . $conn->error;
    }
}

?>