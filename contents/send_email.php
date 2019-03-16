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
$email=$_REQUEST['s_email'];
$szoveg=$_REQUEST['s_szoveg'];

$sql = "INSERT INTO emails (email, szoveg) VALUES ('$email', '$szoveg')";

if ($conn->query($sql) === TRUE) {
    ?>
		<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
		<html>
		<head>
		</head>
		<body>
			Feladó:<b><?php echo $email;?> </b><br><br>
			Üzenet:<br>
			<?php echo $szoveg;?> 			
		</body>
		</html>
	<?php
} else {
    echo "Hiba: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
