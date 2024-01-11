<?php
include('files/students.php');
include('files/activities.php');


function showOptions(array $activities): void {
	foreach($activities as $key=>$activity) {
		echo ($key+1)." - ".$activity.PHP_EOL;
	}
}

showOptions($activities);
$option = readline("Hei! Quina activitat vols assignar?(Introdueix la opció numèrica)");


?>
