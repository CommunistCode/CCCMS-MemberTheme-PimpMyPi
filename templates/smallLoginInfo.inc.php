<?php

	require_once(FULL_PATH."/membership/classes/member.class.php");

	$member = unserialize($_SESSION['member']);

	echo("<p class='info'>Logged in as <strong>".$member->getUsername()."</strong> ");
	echo("(<a href='".DIRECTORY_PATH."/membership/logout.php'>Logout</a>)</p>");

?>
