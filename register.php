<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
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
    <input type="text" placeholder="lastName" name="lastName" id="lastName" required>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" id="email" required>

    
    <hr>

   
    <button type="submit" class="registerbtn">Register</button>
    
  </div>
  
  
</form>
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	
	// Database connection
	$conn = new mysqli('localhost','root','','registration_form');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else  {
		$stmt = $conn->prepare("insert into register(firstName, lastName, email) values(?, ?, ?)");
		$stmt->bind_param("sss", $firstName, $lastName, $email);
		$execval = $stmt->execute();
		// echo $execval;
		echo "Registration successfull...";
		
    echo"<a href='viewdata.php'<button type='submit'>Click here to view details</button></a>";
		$stmt->close();
		$conn->close();
	}
}
?> 


   
  
</div>
  </body>
</html>