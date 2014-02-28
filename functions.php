<?php
function countWordsByRow($string)
{
	$string = stripslashes($string);
	$string = mysql_real_escape_string($string);
	$string = str_replace("'",' ',$string);
	$string = str_replace("?",' ',$string);
	$string = str_replace(".",' ',$string);
	$string = str_replace("!",' ',$string);
	$string = str_replace(",",' ',$string);
	$string = preg_replace("\|",' ',$string);

	$string = preg_replace("/\s+/"," ",$string);
	$string = trim($string);
	$array = explode(" ",$string);
	return count($array);
}
?>