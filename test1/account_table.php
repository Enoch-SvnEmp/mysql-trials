<!-- this file will  display data from the database into a table format -->

<?php
// Database connection parameters
$connect = mysqli_connect("localhost","root","","test");
if ($connect) {
    echo "Connection successful <br>";
} else {
    echo "Connection failed: " . mysqli_connect_error();
}
$display_table = "SELECT * FROM studentacc";

$show_query = mysqli_query($connect, $display_table);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Tables</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .tableContent {
        width: 80%;
        margin: 1rem;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        font-size: large;
        font-weight: 700;
        background-color: rgba(134, 113, 241, 0.6);
        padding: 0.4rem;
        border-radius: 1rem;
        box-shadow: 0px 0px 9px 1px rgba(82, 54, 54, 0.5);
        transition: all 0.4s;
    }

    .tableContent:hover {
        font-size: large;
        background-color: rgb(96, 80, 172);
        padding: 0.8rem;
        box-shadow: 0px 0px 9px 4px rgba(82, 54, 54, 0.9);
    }
    table{
        width: 100%;
        text-align: center;
        margin: 1rem;
    }
</style>
<body>

<div class="tableContent">

<?php
echo "<table border='0.9'>";

echo "<tr>
<th>Student ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Course</th>
<th>Level</th>
</tr>";

while($row = mysqli_fetch_assoc($show_query))
{
    echo "<tr>";

    echo "<td>".$row['studentID']."</td>";
    echo "<td>".$row['firstname']."</td>";
    echo "<td>".$row['lastname']."</td>";
    echo "<td>".$row['course']."</td>";
    echo "<td>".$row['studentleveL']."</td>";

    echo "</tr>";
}

echo "</table>";
?>
</div>
<a href="index.html">go to form page</a>
</body>
</html>