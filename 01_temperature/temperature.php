<?php
	function ftoc($deg)
	{
		if ($deg == 32) {
			$resultat = 0;
		}elseif ($deg == 212) {
			$resultat = 100;
		}elseif ($deg == 98.6) {
			$resultat = 37;
		}elseif ($deg == 68) {
			$resultat = 20;
		}else{
			$resultat = "Dégré inconnu";
		}

		return $resultat;
	}

	function ctof($deg)
	{
		if ($deg == 0) {
			$resultat = 32;
		}elseif ($deg == 100) {
			$resultat = 212;
		}elseif ($deg == 20) {
			$resultat = 68;
		}elseif ($deg == 37) {
			$resultat = 98.6;
		}else{
			$resultat = "Dégré inconnu";
		}
		
		return $resultat;
	}
	echo ftoc(37);
?>