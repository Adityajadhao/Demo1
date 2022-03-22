<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="style.css">

</head>

<body>

  <form action="updatedata.php" method="post">
  <label for="column">Choose option to update:</label>
  <select name="column" id="column">
    <option value="firstname">Firstname</option>
    <option value="lastname">Lastname</option>
    <option value="email">Email</option>
  </select>
  <br><br>
    Enter Input<br> <input type="text" name="txt" value="<?php if (isset($_POST['txt'])) {echo $_POST['txt'];} ?>"><br>
    Enter Id<br> <input type="text" name="id" value="<?php if (isset($_POST['id'])) {echo $_POST['id'];} ?>"><br>
    <button type="submit"> Submit </button><br>

</body>

</html>

<?php

$choice = "";
$input = "";
$id = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $choice = $_POST["column"];
  $input = $_POST["txt"];
  $id= $_POST["id"];
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($input && $id )) {
      echo "this field cannot be empty";
    } else {
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
      if ($choice=="firstname") {
        $sql = "UPDATE register SET firstname='$input' WHERE id=$id";
      }
      elseif ($choice=="lastname") {
        $sql = "UPDATE register SET lastname='$input' WHERE id=$id";
      }
      else {
        $sql = "UPDATE register SET email='$input' WHERE id=$id";
        
      }

      //$sql = "UPDATE register SET $input WHERE id=$id";

      if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $conn->error;
        $conn->close();
      }
    }
  }
}


?>