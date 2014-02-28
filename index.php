<?php 

/*function testCountWordsByRow(){
	$string = "Salut les gens";
	$count = countWordsByRow($string);
	if ($count == 3)
		return "Oui";
	else
		return "Non";
}

$res = testCountWordsByRow();
echo $res;
*/

function countWordsByRow($string)
{
    $string = preg_replace("/\s+/"," ",$string);
    $string = trim($string);
    $array = explode(" ",$string);
    return count($array);
}

Function tester_compter_nbr_mots_ligne(){
	$text = <<<EOF
Salut les gens \n
l'extreme programming est cool !
EOF;

	//return (3 == countWordsByRow("Salut les gens"));
	return (7 == countWordsByRow($text));
}

var_dump(tester_compter_nbr_mots_ligne());

if (isset($_POST['chaine']) && !empty($_POST['chaine'])){
	echo 'La chaine de la textarea comporte ' . countWordsByRow($_POST['chaine']) . ' mots.';
}

?>

<form method="post" action="index.php">
   <p>
       <label for="chaine">Chaine a compter : </label><br />
       <textarea name="chaine" id="chaine"></textarea>
   </p>
   <input type="submit" value="Compter"></input>
</form>