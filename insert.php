<?php
$name = $_POST['name'];
$rollno = $_POST['rollno'];
$year = $_POST['year'];

$con = mysqli_connect("localhost", "root", "", "php_program");
$query = "INSERT INTO student2 (name, rollno, year) VALUES ('$name', '$rollno', '$year')";
$result = mysqli_query($con, $query);
if($result)
    echo "Sucessfully Inserted data of $name";
else 
    mysqli_error($con);
header("refresh:10, index.html");