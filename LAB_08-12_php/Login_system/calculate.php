<?php



// username and password sent from form
$myusername=$_POST['name'];
$myemail=$_POST['email'];
$myphone=$_POST['phone'];
$mypassword=$_POST['password'];

$sum=$mypassword+$myphone;

echo "My Name : $myusername <br>";
echo "My Email : $myemail <br>";
echo "My Pass : $mypassword <br>";
echo "$sum <br>";

echo "My Phone Number : $myphone <p>its a paragraph</p>";

echo "<table>
	<caption>Table</caption>
	<thead>
		<tr>
			<th>Name</th>
			<th>Student Id</th>
		</tr>
	</thead>
	<tbody>";
	for ($i=0; $i <5; $i++) { 
		echo "<tr>
				<td>data  </td> <td> $i</td>
			</tr>";
	}
		
	echo "</tbody>
	</table>";

?>