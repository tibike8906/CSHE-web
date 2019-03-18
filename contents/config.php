<?php
/*Adatbázis*/
$servername = "127.0.0.1";
$username = "cshe_net";
$password = "alfa1";
$dbname = "cshe";

// Csatlakozás
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Sikertelen csatlakozás: " . $conn->connect_error);
}
?>
