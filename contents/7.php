
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<script type="text/javascript" src="contents/log_validation.js"></script>	
</head>
<body>
      <h2>Felhasználónév és Jelszó</h2> 
	  <div class = "container">
		<form id="log_form" action="contents/login.php" onsubmit="return validateLogForm()" method="post" enctype="multipart/form-data">	
				Felhasználó név:<br>
				<input type="text" name="user_name" id="user_name" value="" /><br>
				Jelszó:<br>
				<input type="password" name="user_jelszo" id="user_jelszo" value="" /><br><br>				
				<input type="submit" value="Bejelentkezés" name="submit">
			</form>
		 </div>      	 
</body>
</html>
