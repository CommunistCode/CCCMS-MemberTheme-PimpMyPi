<?php

	require_once($fullPath."/membership/classes/member.class.php");

	$member = unserialize($_SESSION['member']);

	echo("<p class='info'>Logged in as <strong>".$member->getUsername()."</strong> ");
	echo("(<a href='".$directoryPath."/membership/logout.php'>Logout</a>)</p>");

?>
