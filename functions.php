<?php
function countWordsByRow($string)
{
	$string = preg_replace("#[^a-zA-Z]#", " ", $string);
	$string = preg_replace("/\s+/"," ",$string);
	$string = trim($string);
	$array = explode(" ",$string);
	return count($array);
}
?>