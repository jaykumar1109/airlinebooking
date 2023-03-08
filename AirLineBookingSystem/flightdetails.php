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
    $FlightNumber = $_REQUEST['FlightNumber'];
    $AirLineName = $_REQUEST['AirLineName'];
    $DepartureTime = $_REQUEST['DepartureTime'];
    $ArrivalTime  = $_REQUEST['ArrivalTime '];
    $DeparturePlace = $_REQUEST['DeparturePlace'];
    $ArrivalPlace = $_REQUEST['ArrivalPlace'];
    $EconomicPrice = $_REQUEST['EconomicPrice'];
    $BussinessFlightPrice = $_REQUEST['BussinessFlightPrice'];
    $TotalStay = $_REQUEST['TotalStay'];
  
    
    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO flightdetails VALUES ('$FlightNumber','$AirLineName' ,'$DepartureTime', '$ArrivalTime' ,'$DeparturePlace' , '$ArrivalPlace' , '$EconomicPrice' ,'$BussinessFlightPrice',  '$TotalStay')";
    
    if(mysqli_query($conn, $sql)){
      echo "<h3>your details have been added to the system</h3>";

    } else{
      echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
    }
    
    // Close connection
    mysqli_close($conn);
      ?>