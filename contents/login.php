<?php


$servername = "127.0.0.1";
$username = "cshe_net";
$password = "alfa1";
$dbname = "cshe";

// Csatlakozás
$conn = new mysqli($servername, $username, $password, $dbname);

// Ellenőrzés
if ($conn->connect_error) {
    die("Sikertelen csatlakozás: " . $conn->connect_error);
} 
$user_name=$_REQUEST['user_name'];
$user_jelszo=$_REQUEST['user_jelszo'];
$jelszo_hash=hash('ripemd160', $user_jelszo);

$sql = "SELECT user_name FROM users WHERE user_name = '$user_name' AND user_jelszo = '$jelszo_hash'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {


		$_SESSION['valid'] = "true";
		$_SESSION['username'] = $user_name;
		
		header("location:../index.php");
} else {
    echo "Helytelen jelszó vagy felhasználó név!";
	
}
$conn->close();
?>
