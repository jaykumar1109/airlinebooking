<!DOCTYPE html>
<html charset="utf-8" lang="en">
		<head>
<style>

body{ 
 
background-image: url("airline4.jpg");
 background-repeat: no-repeat;
 background-size: 100%;
}		
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
   color:black;
  font-size: 30px;
  
  width: 1000px;
  border: 15px solid darkgrey;
  padding: 50px;
  margin:100px;

  
}
.title1
{ 
 
 font-size:30px;
 font-style:italic;
 color:blue; }
.c1 {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.8);
  color: blue;
}
.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  border: 10px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 30px;
  font-style: italic;
  text-align: center;
}
.title3{ 
  margin-left: 20px; 
  font-size: 20px;
  width:70px;
  height:30px;
  background-color: grey;
}

</style>
			<title>Meal Type
			</title>
		</head>
		<body>
			<div 
			style="font-size:50px;" 
			style="font-style:italic;"> Blue Airways service </div>
			<a href="Home.html"><button class="title3"><b>Home<b></button></a>
			<hr>
      <div class="grid-container"><div class="title1"> Meal Services</div>

      
      <div >
        <form class="Accomodation"> 
          <div>
        <label class="Username">First Name:</label>
        <textarea class="Username" placeholder="username">
        </textarea>
      </div>
      <div>
        <label class="usernamelast">Last name:</label>
        <textarea class="usernamelast" placeholder="secondname">
        </textarea>
      </div>
      <div>
        <label class="holdingTime">Holding time and date:</label>
        <textarea class="holdingtime" placeholder="holdingtime">
        </textarea>
      </div>
          <div>
        <label class="stay">Stay:</label>
        <textarea class="numberofperson" placeholder="Enter your user name">

          
        </textarea>
      </div>
      <div>
        <label class="boardingpassnumber">Boarding pass number:</label>
        <textarea class="boadingpassnumber" placeholder="enter 12 digit number">
        </textarea>
      </div>
      <div>
        <label class="holdingTime">Holding time and date:</label>
        <textarea class="holdingtime" placeholder="holdingtime">
        </textarea>
      </div>
      <div>
        <label class="numberofPeople">Number of passangers:</label>
        <textarea class="numberofpassanger" placeholder="numberofpassnger">
        </textarea>
      </div>

<button style="width: 180px; height: 40px; font-size: 30px; ">Submit</button>
      </form>
      </div>
    </div>
			
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
    $Gender = $_REQUEST['Gender'];
    $Address = $_REQUEST['Address'];
    $Email = $_REQUEST['Email'];
    $Password =$_REQUEST['Password'];
    
    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO authentication VALUES ('$FirstName',
      '$LastName','$Gender','$Address','$Email','$Password')";
    
    if(mysqli_query($conn, $sql)){
      echo "<h3>Hii thank you for registering , your data is been stored securely</h3>";

      echo nl2br("\n $FirstName\n $LastName\n "
        . "$Gender\n $Address\n $Email\n $Password");
    } else{
      echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
    }
    
    // Close connection
    mysqli_close($co
	

			
		</body>
    <footer class="Footerplace">Copyright © 2023 Air India Ltd. All rights reserved.
Use of this website indicates your compliance with our Privacy Policy, Conditions of Carriage, Terms and Conditions.</footer>
		</html>
			
	