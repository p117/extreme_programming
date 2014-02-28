<?php 

require('functions.php');

function tester_compter_nbr_mots_ligne(){
	$text = <<<EOF
Salut les gens \n
l'extreme programming est cool !
EOF;

$text2 = <<<EOF
Comment \|| allez vous ?
EOF;
	//echo countWordsByRow($text);
	return (3 == countWordsByRow($text2));
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