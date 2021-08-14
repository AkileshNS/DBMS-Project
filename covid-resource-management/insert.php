<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Data</title>
</head>
  
<body>
    <center>
        <?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => covid_resource_manegement
        $conn = mysqli_connect("localhost", "root", "", "covid_resource_management");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $name =  $_REQUEST['name'];
        $phone = $_REQUEST['phone'];
        $category =  $_REQUEST['category'];

          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO maintable  VALUES ('$name', 
            '$phone','$category')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>Data stored successfully! Thanks for helping the community</h3>"; 
  
            echo nl2br("\n$name\n $phone\n "
                . "$category\n");
        } else{
            echo "ERROR: Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>