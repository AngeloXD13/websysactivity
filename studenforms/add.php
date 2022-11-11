<?php

include 'connection.php';
require("connection.php");
session_start();

?>


<!DOCTYPE html>
<html>

<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form action="inputdata.php" method="post">
        <h2>Add Student</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <label>Srcode</label>
        <input type="text" name="Sr-code" placeholder="XX-XXXXX"><br>
        
        <label>Lastname</label>
        <input type="text" name="Lastname" placeholder="Lastname"><br>

        <label>Firstname</label>
        <input type="text" name="Firstname" placeholder="Firstname"><br>

        <label>Middlename</label>
        <input type="text" name="Middlename" placeholder="Middlename"><br>

        <label>Address</label>
        <input type="text" name="Address" placeholder="Address"><br>

        <label>Contact No.</label>
        <input type="text" name="ContactNo" placeholder="09123456789"><br>

        <button type="submit">ADD</button>
    </form>

</body>

</html>