<?php
function word_remove_accents($str, $charset='utf-8')
{
    $string = htmlentities($str, ENT_NOQUOTES, $charset);
    $string = preg_replace('#&([A-za-z])(?:acute|cedil|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
    $string = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str);
    return $str;
}
function countWordsByRow($string)
{
	$string = word_remove_accents($string);
	$string = preg_replace("#[^0-9a-zA-Z]#", " ", $string);
	$string = preg_replace("/\s+/"," ",$string);
	$string = trim($string);
	$array = explode(" ",$string);
	return count($array);
}
?>