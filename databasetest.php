<!-- <?php
$host="localhost";
$username="root";
$pass="";
$dbname="registration_form";
$conn=new mysqli($host,$username,$pass,$dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


 $sql = "CREATE TABLE Register (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 firstname VARCHAR(30) NOT NULL,
 lastname VARCHAR(30) NOT NULL,
 email VARCHAR(50))";
if ($conn->query($sql) === TRUE) {
echo "Table Register created successfully";
 }
  else {
   echo "Error creating table:" . $conn->error;
 }

 $conn->close();
?> -->