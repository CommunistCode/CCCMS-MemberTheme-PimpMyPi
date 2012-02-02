<?php

	require_once($fullPath."/membership/classes/member.class.php");

	$member = unserialize($_SESSION['member']);

	echo("<p>Logged in as <strong>".$member->getUsername()."</strong> - ");
	echo("<a href='".$directoryPath."/membership/logout.php'>Logout</a></p>");

?>
