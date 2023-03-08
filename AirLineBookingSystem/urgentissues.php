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
    Email Issues  
    // Taking all 5 values from the form data(input)
    $Email = $_REQUEST['Email'];
    $Issues = $_REQUEST['Issues'];
    
    
    
    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO urgentissues VALUES ('$Email',
      '$Issues')";
    
    if(mysqli_query($conn, $sql)){
      echo "<h3>thank you for your contact , your issue will be resolved in next 8 hours</h3>";

     
    } else{
      echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
    }
    
    // Close connection
    mysqli_close($conn);
      ?>