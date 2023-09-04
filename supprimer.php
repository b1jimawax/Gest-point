<?php
include("connexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idapprenant = $_POST["idapprenant"];

    $sql = "DELETE FROM apprenant WHERE idapprenant = $idapprenant";

    if ($conn->query($sql) === TRUE) {
        echo "Apprenant supprimé avec succès de la base de données";
    } else {
        echo "Erreur : " . $sql . "<br>" . $conn->error;
    }
}
header("Location: tableaudebord_admin.php");
?>
