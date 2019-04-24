<?php  
$rollno = $_POST['rollno'];
$name = $_POST['name'];
$year = $_POST['year'];
$con = mysqli_connect("localhost", "root", "", "php_program");
$query = "UPDATE student2 SET name='$name', year='$year' WHERE rollno = '$rollno'";
$result = mysqli_query($con, $query);
if($result){
    echo "Successfully updated Data";
    header("refresh:5, index.html");
}
else {
    echo "Name not found";
    header("refresh:5, update.html");
}
