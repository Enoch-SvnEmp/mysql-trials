<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT account </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Student details will be Displayed here</h1>

<div class="content">
<?php

$studentID = $_POST["studentID"];
$firstname = $_POST["firstName"];
$lastname = $_POST["lastName"];
$course = $_POST["course"];
$studentlevel = $_POST["level"];



echo "Student ID :   ".$studentID ."<br>";
echo "First Name: " .$firstname. "<br>   Last Name :" .$lastname."<br>";
echo "Course: ".$course. "  at level:  ".$studentlevel."<br>";

$connect = mysqli_connect("localhost", "root", "", "test");
if ($connect) {
    echo "Connection successful <br>";
} else {
    echo "Connection failed: " . mysqli_connect_error();
}
// $sqlresults = "SELECT * FROM studentacc";
// $showsqlresults = mysqli_query($connect, $sqlresults);

$sqlinsert = "INSERT INTO studentacc (studentID, firstName, lastName, course,  studentlevel) VALUES ('$studentID', '$firstname', '$lastname', '$course', '$studentlevel')";

$result = mysqli_query($connect, $sqlinsert);
?>

</div>

<a href="account_table.php">view table</a>
</body>
</html>