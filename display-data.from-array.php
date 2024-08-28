<!-- 
		<title>Table</title>

		<table border="1">
			<tr>
				<td>S.N</td>
				<td>Name</td>
				<td>Email</td>
			</tr>
			<tr>
				<td>1</td>
				<td>Pramita</td>
				<td>pramita@test.com</td>
			</tr>
			<tr>
				<td>1</td>
				<td>Pramita</td>
				<td>pramita@test.com</td>
			</tr>
			<tr>
				<td>1</td>
				<td>Pramita</td>
				<td>pramita@test.com</td>
			</tr>

		</table> -->
		<?php
		$users=[
			[1,"pramita", "prami@gmil.com"],
			[2,"sam","sam@gmail.com"],
			[3,"peter","peter@gmail.com"],
			[4,"tony","tony@gmail.com"],
			[5,"bruce","bruce@gmail.com"]

		];
		echo "<table border=1>";
		for($i=0;$i<count($users);$i++){
			echo "<tr>";
			for($j=0;$j<count($users[$i]);$j++){
				echo "<td>";
				echo $users[$i][$j];
				echo "</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
		?>
