<?php
function countWords($file)
{
	$rows = "";
	try
	{
		$handle = fopen($file,"r");
	}
	catch(Exception $e)
	{
		echo 'file doesn\'t exist';
		exit;
	}
	while(!feof($handle))
	{
		$rows .= fgets($handle);
	}
	return countWordsByRow($rows);
}

function countWordsByRow($string)
{
	$string = mysql_real_escape_string($string);
	$string = str_replace("'",' ',$string);
	$string = str_replace("?",' ',$string);
	$string = str_replace(".",' ',$string);
	$string = str_replace("!",' ',$string);
	$string = str_replace(",",' ',$string);

	$string = preg_replace("/\s+/"," ",$string);
	$string = trim($string);
	$array = explode(" ",$string);
	return count($array);
}

?>