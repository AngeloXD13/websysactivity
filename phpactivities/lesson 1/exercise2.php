<!DOCTYPE html>
<html>

<head>
    <title>Exercise 2</title>
</head>

<?php
    $data = random_int(0, 100);

    echo $data . " ";

    if ($data % 2 == 0) {
        $color = 'green';
        echo 'even';
    } else{
        $color = 'blue';
        echo 'odd';
    }

    ?>

<style>
    html {
        background-color:  <?php echo $color;?>;
    }
</style>


<body>
    
</body>

</html>