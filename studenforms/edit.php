<?php
require("connection.php");
session_start();

$conn = mysqli_connect("localhost", "root", "", "websys");

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

// Taking all 5 values from the form data(input)
//$Sr_code =  $_REQUEST['Sr-code'];
//$Lastname = $_REQUEST['Lastname'];
//$Firstname =  $_REQUEST['Firstname'];
//$Middlename = $_REQUEST['Middlename'];
//$Address = $_REQUEST['Address'];
//$ContactNo = $_REQUEST['ContactNo'];


if (array_key_exists('Search', $_POST)) {
    search($conn);
}

function search($conn)
{
    echo "Search results";

    $Sr_code = $_POST["srcode"];
    echo $Sr_code . "<br>";

    $sql_validation = "SELECT * FROM student WHERE `sr-code` = '$Sr_code'";
    echo $sql_validation . "<br>";

    $validation_result = $conn->query($sql_validation);
    $row = [];

    if ($validation_result->num_rows > 0) {
        echo "SR-Code existed";
        include 'editform.php';
    } 
    else {
        echo "No SR-Code existed";
    }
}

?>

<!DOCTYPE html>
<html>

<body>

    <h2>Edit student info</h2>

    <form method="post">
        <label for="srcode">Search Sr-Code</label><br>
        <input type="text" name="srcode" placeholder="XX-XXXXX"><br><br>
        <input type="submit" name="Search">
    </form>

</body>

</html>