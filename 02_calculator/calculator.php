<?php
	// Fonction addition
	function add($x, $y)
	{
		return $x + $y;
	}

	// Fonction soustraction
	function substract($x, $y)
	{
		return $x - $y;
	}

	// Fonction somme
	function sum($tab = [])
	{
		$somme = 0;
		foreach ($tab as $element) {
			$somme += $element;
		}
		return $somme;
	}

	// Fonction multiplication
	function multiply($x, $y)
	{
		return $x * $y;
	}
?>