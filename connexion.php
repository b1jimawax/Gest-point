<!DOCTYPE html>
<?php 
$servername="localhost:3306";
$username="root"; 
$password="";
$dbname="gest_point";

//creer la connection avec la base de donnée
$conn = new mysqli($servername, $username, $password, $dbname,3306);

//vérification de connection
    if ($conn -> connect_error){
        die("la connexion a echouer");
    }
?>
