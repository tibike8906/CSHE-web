<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		include("config.php");
		
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
				<?php echo $szoveg;?> <br><br><br>			
				</body>
				</html>
			<?php

		} else {
			echo "Hiba: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
	

	} 

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<script type="text/javascript" src="contents/email_validation.js"></script>	
</head>
<body>

<div id="Email">
			<form id="email_form" action="" onsubmit="return validateEmailForm()" method="post" enctype="multipart/form-data">	
				Saját email cím<br>
				<input type="text" name="s_email" id="emailcim" value="" />
				<input type="submit" value="Küldés" name="submit">
			</form>
			Üzenet<br>
			<textarea name="s_szoveg" id="szoveg" form="email_form"></textarea>				
		</div>

</body>
</html>