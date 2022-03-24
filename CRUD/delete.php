<?php
$input = "";

$input = base64_decode(urldecode($_GET['id']));

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
    //   echo "<script>alert('Record deleted successfully')</script>";
?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/new/CRUD/viewdata.php">
<?php
} else {
    echo "Error deleting record: " . $conn->error;
    $conn->close();
}




?>