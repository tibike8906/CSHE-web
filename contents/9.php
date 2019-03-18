<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		include("config.php"); 
		$user_name=$_REQUEST['user_name'];
		$user_veznev=$_REQUEST['user_veznev'];
		$user_kernev=$_REQUEST['user_kernev'];
		$emailcim=$_REQUEST['user_email'];
		$user_jelszo=$_REQUEST['user_jelszo'];
		$jelszo_hash=hash('ripemd160', $user_jelszo);

		$sql = "INSERT INTO users (user_name, user_veznev, user_kernev, user_email, user_jelszo) VALUES ('$user_name','$user_veznev','$user_kernev','$emailcim','$jelszo_hash')";

		if ($conn->query($sql) === TRUE) {
			echo 'Sikeres regisztráció!'. "<br><br><br>";	
		} else {
			echo "Hiba: " . $sql . "<br><br><br>" . $conn->error;
		}

	$conn->close();
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<script type="text/javascript" src="contents/reg_validation.js"></script>
</head>
<body>
<div id="Registrat">
			<form id="reg_form" action="" onsubmit="return validateRegForm()" method="post" enctype="multipart/form-data">	
				Felhasználó név:<br>
				<input type="text" name="user_name" id="user_name" value="" /><br>
				Vezetéknév:<br>
				<input type="text" name="user_veznev" id="user_veznev" value="" /><br>
				Keresztnév:<br>
				<input type="text" name="user_kernev" id="user_kernev" value="" /><br>
				Email cím:<br>
				<input type="text" name="user_email" id="user_email" value="" /><br>
				Jelszó:<br>
				<input type="password" name="user_jelszo" id="user_jelszo" value="" /><br>
				Jelszó megerősítés:<br>
				<input type="password" name="user_jelszo_meg" id="user_jelszo_meg" value="" /><br><br>
				
				<input type="submit" value="Regisztráció" name="submit">
			</form>
</div>
</body>
</html>
