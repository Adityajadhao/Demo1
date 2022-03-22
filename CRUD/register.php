<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<form action="register.php" method="post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to Register.</p>
    <hr>
    <label for="firstName"><b>FirstName</b></label>
    <input type="text" placeholder="Enter firstName" name="firstName" id="firstName" required>
    <label for="lastName"><b>LastName</b></label>
    <input type="text" placeholder="Enter lastName" name="lastName" id="lastName" required>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" id="email" required>

    
    <hr>

   
    <button type="submit" class="registerbtn">Register</button>
	<a href='viewdata.php' type='submit'>View Details</a><br>
	<a href='deletedata.php' type='submit'>Delete Data</a><br>
	<a href='updatedata.php' type='submit'>Update Data</a><br>
	

	

    
  </div>
  
  
</form>
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	
	// if (isset($_POST['viewDetails']) != Null){
	// 	header('location:viewdata.php');
	// }
	// Database connection
	$conn = new mysqli('localhost','root','','registration_form');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else  {
		$stmt = $conn->prepare("insert into register(firstName, lastName, email) values(?, ?, ?)");
		$stmt->bind_param("sss", $firstName, $lastName, $email);
		$execval = $stmt->execute();
		//echo $execval;
		echo "Registration successfull...";
		
    
		$stmt->close();
		$conn->close();
	}
}
?> 


   
  
</div>
  </body>
</html>