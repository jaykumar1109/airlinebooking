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
    $Request = $_REQUEST['Request'];
    $MealType = $_REQUEST['MealType'];
    $AccomodationAtAirport = $_REQUEST['AccomodationAtAirport'];
    $ReschedualingFlight = $_REQUEST['ReschedualingFlight'];
    $CancellationReason = $_REQUEST['CancellationReason'];
    $RefundReason = $_REQUEST['RefundReason'];
  
    
    
    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO services VALUES ('$Request',
      '$MealType','$AccomodationAtAirport','$ReschedualingFlight','$CancellationReason','$RefundReason')";
    
    if(mysqli_query($conn, $sql)){
      echo "<h3>Request is been sent to the management staff</h3>";
}
     else{
      echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
    }
    
    // Close connection
    mysqli_close($conn);
      ?>