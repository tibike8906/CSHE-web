<?php
  if (isset($_GET["pid"]))
	  $aktualis_oldal = $_GET["pid"];
	else
	  $aktualis_oldal = 1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Csepel Horgász Egyesület</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
	<div id="upbar">	
		<ul>
			<li>
				<img src="images/tagegy.jpg" height="42" width=auto hspace="0">
				<img src="images/cimergif.gif" height="42" width=auto hspace="20">				
				<div id="search" >					
					<form method="get" action="#">
						<div>
							<h1>Keresés az oldalon</h1>
							<input type="text" name="s" id="search-text" value="" />
							<input type="submit" id="search-submit" value="Keresés" />
						</div>
					</form>
				</div>
				<div style="clear: both;">&nbsp;</div>
			</li>
		</ul>
	</div>
	
	<div id="menu">
		<ul>
			<?php include("menu/upper_menu.php"); ?>
		</ul>
	</div>
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<?php
						if (file_exists("contents/".$aktualis_oldal.".php"))
							include("contents/".$aktualis_oldal.".php");
						else
							include("404.php");
					?>
					<div style="clear: both;">&nbsp;</div>
				</div>
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
</body>
</html>