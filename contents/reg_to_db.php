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
$user_veznev=$_REQUEST['user_veznev'];
$user_kernev=$_REQUEST['user_kernev'];
$emailcim=$_REQUEST['user_email'];
$user_jelszo=$_REQUEST['user_jelszo'];
$jelszo_hash=hash('ripemd160', $user_jelszo);

$sql = "INSERT INTO users (user_name, user_veznev, user_kernev, user_email, user_jelszo) VALUES ('$user_name','$user_veznev','$user_kernev','$emailcim','$jelszo_hash')";

if ($conn->query($sql) === TRUE) {
    ?>
		<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
		<html>
		<head>
		</head>
		<body>
			<h1>Sikeres Regisztráció!<h1>			
		</body>
		</html>
	<?php
	$conn->close();	
} else {
    echo "Hiba: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
