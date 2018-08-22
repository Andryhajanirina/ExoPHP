<?php

	// Fonction retour à la ligne
	function br()
	 {
	 	echo nl2br("<br>");
	 } 

	// Fonction qui dit bonjour
	function hello(){
		return "Hello!";
	}

	// echo hello();
	// br();

	// Fonction qui dit bonjour à quelqu'un
	function greet($value)
	{
		return "Hello, $value!";
	}

	// echo greet("Alice");
	// br();
?>