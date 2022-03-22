<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
<form action="deletedata.php" method="post">
    Enter Id<br> <input type="text" name="txt" value="<?php if(isset($_POST['txt'])){ echo $_POST['txt'];}?>"><br>
    <button type="submit"> Submit </button><br>
    
</body>
</html>

<?php
$input ="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    
$input = $_POST["txt"];
if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
if (empty($input))
{
    echo "this field cannot be empty";
}
else{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration_form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM register WHERE id=$input";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
  $conn->close();
}
}
}
}

?>