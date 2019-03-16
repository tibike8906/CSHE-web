<?php
  $upper_menu = Array(
    1 => Array("szoveg" => "Nyitólap", "cim" => "Nyitólap"),
    2 => Array("szoveg" => "Rólunk", "cim" => "Rólunk"),
    3 => Array("szoveg" => "Programok", "cim" => "Programok"),
	4 => Array("szoveg" => "Galéria", "cim" => "Galéria"),
	5 => Array("szoveg" => "Videók", "cim" => "Videók"),
	6 => Array("szoveg" => "Bejelentkezés", "cim" => "Bejelentkezés, Regisztráció"),
	7 => Array("szoveg" => "Email", "cim" => "Email küldés az üzemeltetőnek!")
  );
  
  foreach ($upper_menu as $id => $leiro) {
    echo "<li";
    if ($id == $aktualis_oldal)
      echo " class=\"current_page_item\"";
    echo "><a title=\"".$leiro["cim"]."\" href=\"?pid=$id\">".
         $leiro["szoveg"]."</a></li>\n\t";
  }
?>