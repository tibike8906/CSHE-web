<?php
  $upper_menu = Array(
    1 => Array("szoveg" => "Nyitólap", "cim" => "Nyitólap"),
    2 => Array("szoveg" => "Rólunk", "cim" => "Rólunk"),
    3 => Array("szoveg" => "Programok", "cim" => "Programok"),
	4 => Array("szoveg" => "Galéria", "cim" => "Galéria"),
	5 => Array("szoveg" => "Videók", "cim" => "Videók"),
	6 => Array("szoveg" => "Email", "cim" => "Email küldés az üzemeltetőnek!"),
	7 => Array("szoveg" => "Bejelentkezés", "cim" => "Bejelentkezés"),
	8 => Array("szoveg" => "Kijelentkezés", "cim" => "Kijelentkezés"),
	9 => Array("szoveg" => "Regisztráció", "cim" => "Regisztráció")
  );
  
  foreach ($upper_menu as $id => $leiro) {
    echo "<li";
    if ($id == $aktualis_oldal)
      echo " class=\"current_page_item\"";
	if ( $_SESSION["valid"]== "false"){
		if($id == 8){
			echo " class=\"disabledLink\"";
			echo "><a title=\"".$leiro["cim"]."\" href=\"#\">".$leiro["szoveg"]."</a></li>\n\t";
		} else {
			echo "><a title=\"".$leiro["cim"]."\" href=\"?pid=$id\">".$leiro["szoveg"]."</a></li>\n\t";
		}		
	} else {
		if($id == 7 || $id == 9){
			echo " class=\"disabledLink\"";
			echo "><a title=\"".$leiro["cim"]."\" href=\"#\">".$leiro["szoveg"]."</a></li>\n\t";
		} else {
			echo "><a title=\"".$leiro["cim"]."\" href=\"?pid=$id\">".$leiro["szoveg"]."</a></li>\n\t";
		}		
	}
  }
?>