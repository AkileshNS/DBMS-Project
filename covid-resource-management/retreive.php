<!DOCTYPE html>
<html>
  
<head>
    <title>Retreive Data</title>
</head>
  
<body>
    <center>
    <table border="2">
        <tr>
            <td>Name</td>
            <td>Phone Number</td>
            <td>Category</td>
        </tr>


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
          
        $category =  $_REQUEST['category'];
          
        // Performing insert query execution
        // here our table name is college
        $query = "Select * from maintable where category = '$category'";

        $run = mysqli_query($conn,$query);


        while($row=mysqli_fetch_array($run))
     {
        ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['category']; ?></td>
        </tr>	
        <?php
}
?>
        </table>



    </center>
</body>
  
</html>