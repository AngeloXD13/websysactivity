<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "websys");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $Sr_code =  $_REQUEST['Sr-code'];
        $Lastname = $_REQUEST['Lastname'];
        $Firstname =  $_REQUEST['Firstname'];
        $Middlename = $_REQUEST['Middlename'];
        $Address = $_REQUEST['Address'];
        $ContactNo = $_REQUEST['ContactNo'];
       
         

        $sql_validation = "SELECT * FROM student WHERE sr-code = '$Sr_code'";
        echo $sql;

        $validation_result = ($conn->query($sql));
        $row = []; 

        if ($result->num_rows > 0) 
        {
            
        } 
        else{
            echo "SR-Code exixted, please change the srcode";
        }

        function insertData(){
            $sql = "INSERT INTO student  VALUES ('$Sr_code','$Lastname','$Firstname','$Middlename','$Address','$ContactNo')";
         
            echo $sql;
            if(mysqli_query($conn, $sql)){
                echo "<h3>data stored in a database successfully."
                    . " Please browse your localhost php my admin"
                    . " to view the updated data</h3>";
    
                echo nl2br("\n$Sr_code\n $Lastname\n "
                    . "$Firstname\n $Middlename\n $Address\n $ContactNo\n ");
            } else{
                echo "ERROR: Hush! Sorry $sql. "
                    . mysqli_error($conn);
            }

             // Performing insert query execution
            // here our table name is college
            
            
            // Close connection
            mysqli_close($conn);

        }
    
       
        ?>
    </center>
</body>
 
</html>