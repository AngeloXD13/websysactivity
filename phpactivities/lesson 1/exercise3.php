<!DOCTYPE html>
<html>

<head>
    <title>Exercise 3</title>
</head>

<?php
$data = random_int(0, 100);

echo "Random Number: ".$data . " ";

if ($data % 2 == 0) {
    $color = 'green';
    $oddoreven = 'even';
} else {
    $color = 'blue';
    $oddoreven = 'odd';
}

?>

<style>
    td {
        background-color: <?php echo $color; ?>;
        border: 1px solid black;
    }
</style>


<body>
    <table style="width:50%">
        <tr>
            <td>
                <center>
                    <?php echo $oddoreven ?>
                </center>
            </td>
        </tr>

</body>

</html>