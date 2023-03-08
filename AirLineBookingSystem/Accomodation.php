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
    $HoldingTimeAndDate = $_REQUEST['HoldingTimeAndDate'];
    $Stayvenue = $_REQUEST['Stayvenue'];
    $BoardingPass = $_REQUEST['BoardingPass'];
    $NumberOfPeople = $_REQUEST['NumberOfPeople'];
    $MealPreferance = $_REQUEST['MealPreference'];
    $Lunch = $_REQUEST['Lunch'];
    $Dinner = $_REQUEST['Dinner'];
    $Additionalrequest = $_REQUEST['Additionalrequest'];
    
    
    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO accomodation VALUES ('$FirstName',
      '$LastName','$HoldingTimeAndDate','$Stayvenue','$BoardingPass','$NumberOfPeople','$MealPreferance','$Lunch','$Dinner','$Additionalrequest')";
    
    if(mysqli_query($conn, $sql)){
      echo "<h3>Hii thank you for registering , your data is been stored securely</h3>";

      echo nl2br("\n$FirstName\n $LastName\n "
        . "\n$HoldingTimeAndDate \n$Stayvenue \n$BoardingPass \n$NumberOfPeople \n$MealPreferance \n$Lunch \n$Dinner  \n$Additionalrequest ");
    } else{
      echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
    }
    
    // Close connection
    mysqli_close($conn);
      ?>