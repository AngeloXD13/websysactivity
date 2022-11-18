<!-- ANGELO DIONISIO -->
<!DOCTYPE html>
<html>

<head>
    <title>Exercise 2</title>
</head>

</html>
<body>
    <?php
    $primenumbers = array(1,2,3,5,7);
    for ($x = 0; $x < count($primenumbers); $x++) {
        echo "<pre>". ($primenumbers[$x]*2)."\t" . ($primenumbers[$x]*$primenumbers[$x])."\t" . ($primenumbers[$x]*$primenumbers[$x]*$primenumbers[$x]) . "<br>";
    }
    ?>
</body>