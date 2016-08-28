<?php
	$id = $_GET["id"];
	// swapping the output variable to be represented by echo
	// so that 
	if ($id == "1") {
		$output = "You have chosen a Mac";
	} else if ($id == "2") {
		$output = "You have chosen Linux";
	} else if ($id == "3") {
		$output = "You have chosen Windows";
	} else {
		$output = "You entry is not valid, try again";
	}
	
?>
