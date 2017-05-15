<?php

$homeCount = $_POST["homecount"];
$awayCount = $_POST["awaycount"];

	if ($homeCount > $awayCount) {
		
		header("location:homeTeam.html");
	}
	else {
		
		header("location:awayTeam.html");
	}

?>