<?php
function word_remove_accents($str, $charset='utf-8')
{
    $str = htmlentities($str, ENT_NOQUOTES, $charset);
    
    $str = preg_replace('#&([A-za-z])(?:acute|cedil|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
    $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str); // pour les ligatures e.g. '&oelig;'
    $str = preg_replace('#&[^;]+;#', '', $str); // supprime les autres caractères
    
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