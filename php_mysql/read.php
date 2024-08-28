<?php
include("./config.php");
$getStudents=$conn->prepare("SELECT * FROM students");
$getStudents->execute();
$students=$getStudents->fetchAll();
// echo "<pre>";
// print_r($students);

echo "<table border='1'>";
foreach($students as $student){
	// echo "<tr>
	// <th>".$name."</th>
	// <th>".$course."</th>
	// <th>".$batch."</th>
	// <th>".$city."</th>
	// <th>".$year."</th>
	// </tr>";
	echo "<tr>
	<td>".$student['name']."</td>
	<td>".$student['course']."</td>
	<td>".$student['batch']."</td>
	<td>".$student['city']."</td>
	<td>".$student['year']."</td>
	</tr>";
}
echo "<table>";
?>