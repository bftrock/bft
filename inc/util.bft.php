<?php

function get_nav($current_page = null) {

	$html = "<ul>\n";
	$pages = array("Summary"=>"index.php", "Manager"=>"manager.php", "Engineer"=>"engineer.php", "Education"=>"education.php", 
		"Music"=>"music.php", "Activities"=>"activities.php", "Contact"=>"contact.php");
	foreach ($pages as $key => $value) {
		$html .= "<li";
		if ($current_page == $key) {
			$html .= " class=\"cp\">{$key}</li>\n";
		} else {
			$html .="><a href=\"{$value}\">{$key}</a></li>\n";
		}
	}
	$html .= "</ul>\n";
	echo $html;

}

?>