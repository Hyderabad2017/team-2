<!DOCTYPE html>


<style>
input[type=text], select {
    width: 100%;0.0
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>

<body>

<h2 style="margin-left:250px;color:green;">Login</h2>

<div style="width:50%;margin-left:250px" >
    <form action="" method="post">
	
        
      
	<label >Email:</label>
		<span style="color:red">*</span>
        <input type="text" id="email" name="email" placeholder="Enter mail id" style="width:100%">
		<br/>
		<br/>
		 <label >Password:</label>
		<span style="color:red">*</span>
        <input type="password" id="pwd" name="pwd" placeholder="Enter password">
		
		<input type="submit" value="Submit" name="Submit">
    </form>
	</div>
	
	
	<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"cfg2");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$email1=$password1="";
$emailErr=$nameErr="";


if (isset($_POST["Submit"])) {
	
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		 if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email1= test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email1, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
	if (empty($_POST["pwd"])) {
    $nameErr = "Password is required";
  } else {
    $password1 = test_input($_POST["pwd"]);
    // check if name only contains letters and whitespace
    
  }
$query="select email,password from stureg where email='".mysqli_real_escape_string($conn,$email1)."' and password='".mysqli_real_escape_string($conn,$password1)."'";
		$query_run=mysqli_query($conn,$query);
          if(mysqli_num_rows($query_run)>0)
			{	
			echo "successful login";
			header("Location:student_update.php");
							}
							else
							{
								//$_SESSION['varname']=$user;
								
								echo "error";
								
							}
	}
	}
$_SESSION["msg"] = "u have received request from this ";
	
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}	
?>
</html>
	
	
	