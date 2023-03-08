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
    
     $Address = $_REQUEST['Address'];
      $emailAddress = $_REQUEST['emailAddress'];
       $Reasonofcontact = $_REQUEST['Reasonofcontact'];
    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO contactus VALUES ('$FirstName',
      '$LastName','$Address','$emailAddress','$Reasonofcontact')";
    
    if(mysqli_query($conn, $sql)){
      echo "<h3>Hii thank you for registering , your data is been stored securely</h3>";
 {
        header("location: Home.html");
    }
      
    } else{
      echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
    }
    
    // Close connection
    mysqli_close($conn);
      ?>