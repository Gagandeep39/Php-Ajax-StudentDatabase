<?php 

$con = mysqli_connect("localhost", "root", "", "php_program");
$query = "SELECT * FROM student2";
$result = mysqli_query($con, $query);
$responseValue = "<table>
                    <tr>
                    <th>Name</th>
                    <th>Roll no</th>
                    <th>Year</th>
                    </tr>";
while($row = mysqli_fetch_array($result)){
    $responseValue .= "<tr>";
    $responseValue .= "<td>".$row['name']."</td>";
    $responseValue .= "<td>".$row['rollno']."</td>";
    $responseValue .= "<td>".$row['year']."</td>";
    $responseValue .= "</tr>";
}

$responseValue .= "</table>";
echo $responseValue;
header("refresh:10, index.html");