<?php


$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"cfg1");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$emailErr = $genderErr = $languageErr = $qualificationErr = "";
$email = $gender = $language = $qualification = "";


if (isset($_POST["Submit"])) {
	
	
		if ($_SERVER["REQUEST_METHOD"] == "POST") {

		  if (empty($_POST["email"])) {
			$emailErr = "email is required";
		  } else {
			$email = test_input($_POST["email"]);
			// check if name only contains letters and whitespace
			if (!filter_var($email1, FILTER_VALIDATE_EMAIL)) {
			  $emailErr = "Invalid email format"; 
			}
		  }
  
		  if (empty($_POST["gender"])) {
			$genderErr = "gender is required";
		  } else {
			$gender= test_input($_POST["gender"]);
			// check if name only contains letters and whitespace
			
		  }
  
  
		  if (empty($_POST["language"])) {
			$languageErr = "language is required";
		  } else {
			$language = test_input($_POST["language"]);
			// check if name only contains letters and whitespace
			
		  }
  
		  

		  if (empty($_POST["qualification"])) {
			$qualificationErr = "Gender is required";
		  } else {
			$qualification = test_input($_POST["qualification"]);
		  }
  
			
  
			$sql = "INSERT INTO scribeup('email','gender','language','qualification')
			VALUES ('$email', '$gender','$language','$qualification')";
			if (mysqli_query($conn,$sql)) {
				echo "New record created successfully";
			} else {
				echo "Error: " ;
			}
		}
	
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}






?>
<!DOCTYPE html>
<html>
<head>
<title>Update your profile</title>
<style>
input[type=text], select {
    width: 30%;
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
    width:30%
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
body  {
    background-image: url('ieye.png');
    background-repeat: no-repeat;
    background-attachment: fixed;
}
</style>
</head>
<body >
<h2 align="center">Update your profile</h2>
<form align="center" method="post">
</br>
<<<<<<< HEAD:scribe_update.html
 <label >Email:</label>
		<span style="color:red">*</span>
        <input type="text" id="email" name="email" placeholder="Enter mail id"><br>
        <label >Gender:</label>
		<span style="color:red">*</span><br>
        <input type="radio" name="gender" value="male" checked> Male<br>
        <input type="radio" name="gender" value="female"> Female<br>
        <input type="radio" name="gender" value="other"> Other<br>

Language: <input type="checkbox" name="English" value="english"> English
					<input type="checkbox" name="Telugu" value="telugu"> Telugu</br></br>
=======
Languages preferred: <input type="checkbox" name="check" value="english"> English
					<input type="checkbox" name="check" value="telugu"> Telugu</br></br>
					
>>>>>>> 6a44a63854cb18ed0e56f5b4eca0d3ae8d2d7b93:student_update.php
Qualification: 	<input list="qual" name="qual">
<datalist id="qual">
  <option value="SSC">
  <option value="Intermediate 1st year">
  <option value="Intermediate 2nd year">
  <option value="Graduation">
</datalist> </br></br>

Email id: <input type="text" name="emailid">

Exam Center: <input type="text" name="exam" >
<input type="submit" align="center" name="Update" value="Update" onclick="test.java"></br>

</form>

<<<<<<< HEAD:scribe_update.html
=======
<?php


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

$lang =$quali=$exams=$email="";
if (isset($_POST["Update"])) {
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
  
    $lang = $_POST["check"];
	$quali =$_POST["qual"];
	$exams = $_POST["exam"];
	$email=$_POST["emailid"];
    // check if name only contains letters and whitespace
    
  }
}
	$sql = "INSERT INTO student_update (lang, qual,exam,email) VALUES ('$lang', '$quali','$exams','$email')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " ;
}
?>
>>>>>>> 6a44a63854cb18ed0e56f5b4eca0d3ae8d2d7b93:student_update.php
</body>
</html>
