<?php
/*TO-DO
-Input validation
*/
include('files/students.php');
include('files/activities.php');


function showOptions(array $activities): void {
	foreach($activities as $key=>$activity) {
		echo ($key+1)." - ".$activity.PHP_EOL;
	}
}

function getRandomStudent(array $students): int {
	return rand(0,count($students)-1);
}

showOptions($activities);
$activity_index = readline("Hei! Quina activitat vols assignar?(Introdueix la opció numèrica)");
$student_index = getRandomStudent($students);

echo "Li toca a ".$students[$student_index]." fer ".$activities[intval($activity_index)-1]." felicitats!!"; 

?>
