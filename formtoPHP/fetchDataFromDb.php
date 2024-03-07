<?php

$chandu = mysqli_connect('localhost', 'root', '', 'my_db');  // Est
if (mysqli_connect_errno()) {
   echo 'Error' . mysqli_connect_error();
}
// echo  "Connected Successfully";

$result = mysqli_query($chandu, "SELECT * FROM users");

echo "<table border='5'>
<tr>
<th>FirstName</th>
<th>LastName</th>
<th>Age</th>
</tr>";

while ($row = mysqli_fetch_array($result)) {
   echo "<tr>";

   echo "<td> " . $row["FirstName"] . "</td>";
   echo "<td>" . $row["LastName"] . "</td>";
   echo "<td>" . $row["Age"] . "</td>";
   echo "</tr>";

}

echo "</table> ";




//Crud operations

//1.Update
mysqli_query($chandu, "UPDATE users SET Age=50 WHERE FirstName='chandu' AND LastName='raparthi'");

//2.Delete
mysqli_query($chandu,"DELETE  FROM users WHERE Age =0");




?>