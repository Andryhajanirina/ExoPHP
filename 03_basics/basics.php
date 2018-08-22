<?php
require '../00_hello/hello.php';

	function who_is_bigger($a, $b, $c){
		if (is_null($a) || is_null($b) || is_null($c)){
			$resultat = "nil detected";
		}elseif ($a > $b && $b > $c) {
			$resultat = "a is bigger";
		}elseif ($a < $b && $b > $c) {
			$resultat = "b is bigger";
		}else{
			$resultat = "c is bigger";
		}
		return $resultat;
	}

	// echo who_is_bigger(5, null, 15);

	function reverse_upcase_noLTA($mot_ou_phrases){
		// Coupe les chaines en segment et retourne un tableau
		$string_to_array = explode(" ", $mot_ou_phrases);

		// On renverse l'ordre de chaque mot dans le tableau
		$var_reverse = array_reverse($string_to_array);

		// Conversion en majuscule de chaque mot dans le tabl
		$new_tab = [];
		foreach ($var_reverse as $element) {
			array_push($new_tab, strtoupper($element));
		}

		// On reconstruit les chaines inversé
		$resultat = join($new_tab, " ");

		// On supprime toutes les occurence de lettre "L, T, A" dans les chaines
		$resultat = preg_replace("/(L|T|A)/", "", $resultat);

		// On retourne le resultat
		return $resultat;
	}

	echo reverse_upcase_noLTA("Bonjour tous le monde");
	br();

	function find_42($tableau){
		$retVal = (in_array(42, $tableau)) ? "true" : "false" ;
		return $retVal;
	}

	echo find_42([1, 2, 3, 4, 5, 6, 7 , 8, 9, 10, 42]);
	br();

	// Fonction qui détermine si un nombre est multiple de 3
	function multiple_of_3($nb){
		$retVal = (($nb % 3) == 0) ? true : false ;
		return $retVal;
	}

	function magic_array($tableau){

		$new_tab1 = [];
		$new_tab2 = [];

		foreach ($tableau as $element) {
			// flattened (i.e. no more arrays in array), dans un tableau, il ne devrait plus y en avoir un autre
			if (is_array($element)){
				foreach ($element as $value) {
					array_push($new_tab2, $value);
				}
			}else{
				array_push($new_tab1, $element);
			}
		}

		foreach ($new_tab2 as $value) {
			array_push($new_tab1, $value);
			sort($new_tab1);
		}
		
		// Tableau en ordre décroisssant
		$tableau_reverse = array_reverse($new_tab1);
		print_r($tableau_reverse);

		// with each number multiplicated by 2
		$tableau_fois_2 = [];
		foreach ($tableau_reverse as $value) {
			$resultat = $value * 2;
			array_push($tableau_fois_2, $resultat);
		}

		br();
		print_r($tableau_fois_2);
		br();

		// with each multiple of 3 removed
		$nouveau_tab = [];
		foreach ($tableau_fois_2 as $value) {
			if (multiple_of_3($value)) {
				echo "$value est multiple de 3";
				br();
			} else {
				array_push($nouveau_tab, $value);
			}
			
		}

		print_r($nouveau_tab);
		br();

		// with each number duplicate removed (any number should appear only once)
		$res = array_unique($nouveau_tab);
		print_r($res);
	}
	
	magic_array([1, 2, 3, 4, 5, 6,[ 7 , 8, 9], 10, [1, 2, 3, 4, 5],42]);
?>