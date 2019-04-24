<?php  
$rollno = $_POST['rollno'];
$con = mysqli_connect("localhost", "root", "", "php_program");
$query = "DELETE FROM student2 WHERE rollno = '$rollno'";
$result = mysqli_query($con, $query);
if($result){
    echo "Successfully Deleted Data";
    header("refresh:5, index.html");
}
else {
    echo "Roll no not found";
    header("refresh:5, update.html");
}
