<?php

    // servername => localhost
    // username => root
    // password => empty
    // database name => staff
    $conn = mysqli_connect("127.0.0.1", "root", "", "userdetails");
    
    // Check connection
    if($conn === false){
      die("ERROR: Could not connect. "
        . mysqli_connect_error());
    }
    
    // Taking all 5 values from the form data(input)
    $FirstName = $_REQUEST['FirstName'];
    $LastName = $_REQUEST['LastName'];
    
    $BoardingPass = $_REQUEST['Boardingpass'];
  
    
    
    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO cancellation VALUES ('$FirstName',
      '$LastName','$Boardingpass')";
    
    if(mysqli_query($conn, $sql)){
      echo "<h3>Hii thank you for informing your flight will be cancelled</h3>";

      echo nl2br("\n$FirstName\n $LastName\n "
        . \n$Boardingpass");
    } else{
      echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
    }
    
    // Close connection
    mysqli_close($conn);
      ?>