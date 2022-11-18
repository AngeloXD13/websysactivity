<!-- ANGELO DIONISIO -->
<?php 

function calculate($color1, $color2){
    $primenumbers = array(0,1,2,3,4);
    for ($x = 0; $x < count($primenumbers); $x++) {

        if ($x % 2 == 0) {
            $color = $color1;
        } else {
            $color = $color2;
        }
        echo '<table style="width:50%">';
        echo "<tr>";
        echo '<td style="background-color:'. $color .'">';
        echo '<pre>' . ($primenumbers[$x]*2)."\t" . ($primenumbers[$x]*$primenumbers[$x])."\t" . ($primenumbers[$x]*$primenumbers[$x]*$primenumbers[$x]) . "<br>";
        echo "<td>";
        echo "</td>";
        echo '</table>';
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Exercise 5</title>
    <style>

        pre {
            margin: 0;
            margin-right: 5px;
            margin-left: 5px;
            font-family: Arial, Helvetica, sans-serif;
        }
        table {
            border-spacing: 0;
        }
    </style>
</head>

<body>
  
   
        <?php
        calculate("cyan", "pink");
        print "<BR>";
        calculate("#CCCCCC", "#999999");
        ?>
    
    </table>

</body>

</html>