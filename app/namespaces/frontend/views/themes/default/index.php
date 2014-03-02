<?php 

	// Fonctions du thème 
	include("functions.php");

	// Appel de la template
	include("pages/".$this->getControllerName().'/'.$this->getActionName().".php");

?>