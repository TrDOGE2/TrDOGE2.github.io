    <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "PersonalInformation");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
 
	 $UserName =  $_REQUEST['UserName'];
     $lastname = $_REQUEST['lastname'];
     $email =  $_REQUEST["email"];
     $phonenumber = $_REQUEST['phonenumber'];
     $address = $_REQUEST['address'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO AcountInfo VALUES ('$UserName', '$lastname', '$email', '$phonenumber', '$address')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$UserName\n $lastname\n "
                . "$email\n $phonenumber\n $adress");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
    
?> 
 