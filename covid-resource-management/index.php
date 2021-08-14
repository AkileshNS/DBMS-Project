<!DOCTYPE html>
<html lang="en">
  
<body>
    <center>
        <h1>Welcome to CovidResources.com</h1>
        <br>
        <br>
        <hr>
        <h3>For Submission of Data</h3>
        <br>
  
        <form action="insert.php" method="post">
              
<p>
                <label for="name">Name of Service:</label>
                <input type="text" name="name" id="name">
            </p>
  
  

<p>
                <label for="phone">Phone Number:</label>
                <input type="text" name="phone" id="phone">
            </p>
  
  
  
<p>
                <label for="category">Category:</label>
                <select id="text" name="category">
                <option value="none" selected disabled hidden>
                Select an Option
                </option> 
                <option value="Oxygen Supplier">Oxygen Supplier</option>
                <option value="Hospital Beds">Hospital Beds</option>
                <option value="Tiffin Service">Tiffin Service</option>
                <option value="Ambulance">Ambulance</option>

                </select>
</p>

  
            <br>
        <input type="submit" value="Submit">
        </form>

        <br>
        <br>
        <hr>
        <h3>For Retrieval of Data</h3>
        <br>

        <form action="retreive.php" method="post">
              
              <p>
                              <label for="category">Category:</label>
                              <select id="text" name="category">
                              <option value="none" selected disabled hidden>
                              Select an Option
                              </option> 
                              <option value="Oxygen Supplier">Oxygen Supplier</option>
                              <option value="Hospital Beds">Hospital Beds</option>
                              <option value="Tiffin Service">Tiffin Service</option>
                              <option value="Ambulance">Ambulance</option>

                              </select>
              </p>
              
                
                        <br>
                          <input type="submit" value="Submit">
                      </form>

    </center>
</body>
  
</html>
