<?php
// $fn =$_GET['fn'];
// $ln =$_GET['ln'];
// $em =$_GET['em'];
// $id=$_GET['id'];
?>

<!DOCTYPE html>
<html>

<head>

  <link rel="stylesheet" href="style.css">

</head>

<body>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "registration_form";
  $firstname = "";
  $lastname = "";
  $email = "";
  $id = "";


  if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $firstname = base64_decode(urldecode($_GET['fn']));
    $lastname = base64_decode(urldecode($_GET['ln']));
    $email = base64_decode(urldecode($_GET['em']));
    $id = base64_decode(urldecode($_GET['id']));
  }

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $email = $_POST['email'];
    $id = $_POST['id'];


    $sql = "UPDATE register SET firstname='$firstname',lastname='$lastname', email='$email' WHERE id='$id' ";
    if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
  ?>
      <META HTTP-EQUIV="Refresh" CONTENT="1; URL=http://localhost/new/CRUD/viewdata.php">
  <?php
    } else {
      echo "Error updating record: " . $conn->error;
      $conn->close();
    }
  }
  ?>

  <form action="updatedata.php" method="post">
    <d iv class="container">
      <h1>Update Data</h1>
      <p>Please fill in details to update.</p>
      <hr>
      <label for="id"><b></b></label>
      <input type="hidden" value="<?php echo $id ?>" name="id">
      <label for="firstName"><b>FirstName</b></label>
      <input type="text" value="<?php echo $firstname ?>" name="firstName">
      <label for="lastName"><b>LastName</b></label>
      <input type="text" value="<?php echo $lastname ?>" name="lastName" required>

      <label for="email"><b>Email</b></label>
      <input type="email" value="<?php echo $email ?>" name="email" required>
      <button type="submit" class="registerbtn" name="submit">submit</button>
  </form>
</body>

</html>