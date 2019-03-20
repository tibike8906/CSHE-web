<?php
  $upper_menu = Array(
    1 => Array("pid" => "?pid=1", "szoveg" => "Nyitólap", "cim" => "Nyitólap"),
    2 => Array("pid" => "?pid=2", "szoveg" => "Rólunk", "cim" => "Rólunk"),
    3 => Array("pid" => "?pid=3", "szoveg" => "Programok", "cim" => "Programok"),
	4 => Array("pid" => "?pid=4", "szoveg" => "Galéria", "cim" => "Galéria"),
	5 => Array("pid" => "?pid=5", "szoveg" => "Videók", "cim" => "Videók"),
	6 => Array("pid" => "?pid=6", "szoveg" => "Email", "cim" => "Email küldés az üzemeltetőnek!"),
	7 => Array("pid" => "?pid=7", "szoveg" => "Bejelentkezés", "cim" => "Bejelentkezés"),
	8 => Array("pid" => "?pid=8", "szoveg" => "Kijelentkezés", "cim" => "Kijelentkezés"),
	9 => Array("pid" => "?pid=9", "szoveg" => "Regisztráció", "cim" => "Regisztráció")
  );
  if(isset($_SESSION["valid"])){
	$valid = "true";	  
  } else {
	$valid = "false";	
  }	
  foreach ($upper_menu as $id => $leiro) {
	echo "<li";
	if ( $valid == "false" && $id == 8){
		echo " class=\"disabledLink\"";
		$leiro["pid"] = "#";
	}    
	if ( $valid == "true" && ($id == 7 || $id == 9)){
		echo " class=\"disabledLink\"";
		$leiro["pid"] = "#";
	}
    if ($id == $aktualis_oldal)
      echo " class=\"current_page_item\"";
  
	echo "><a title=\"".$leiro["cim"]."\" href=\"". $leiro["pid"] ."\">".$leiro["szoveg"]."</a></li>\n\t";
  }

?>