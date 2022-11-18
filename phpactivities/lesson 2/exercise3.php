<!-- ANGELO DIONISIO -->
<!DOCTYPE html>
<html>

<head>
    <title>Exercise 3</title>
</head>

<body>
    <table style="width:50%">
   
    
        <?php
        for ($x = 0; $x < 5; $x++) {
            $value = $x;
            if ($x % 2 == 0) {
                $color = 'yellow';
                
            } else {
                $color = 'green';
            }
            echo "<tr >";
            echo '<td style="background-color:'. $color .'">'. $value ."</td>";
            echo "</tr>";
        }
        ?>
    
    </table>

</body>

</html>