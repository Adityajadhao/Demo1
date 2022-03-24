<!DOCTYPE html>
<html>

<head>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>
</head>
<script>
  function checkdelete() {
    return confirm('Confirm Delete?')
  }
</script>

<body>



  <?php

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
  $count = '';
  //$delete="<a href='deletedata.php' type='submit'>Delete </a><br>";
  //$update="<a href='updatedata.php?fn=$row[firstname]&ln=$row[lastname]&em=$row[email]'' type='submit'>Update </a>";


  $sql = "SELECT id, firstname, lastname, email FROM register";
  $result = $conn->query($sql);


  if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Update</th><th>Delete</th></tr>";
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      echo "
    <tr>
    <td>" . ++$count . "</td>
    <td>" . $row["firstname"] . " " . "</td>
    <td>" . $row["lastname"] . " " . "</td>
    <td>" . $row["email"] . "</td>"
  ?>
      <td><a href='updatedata.php?id=<?php echo urlencode(base64_encode($row['id'])); ?>&fn=<?php echo urlencode(base64_encode($row['firstname'])); ?>&ln=<?php echo urlencode(base64_encode($row['lastname'])); ?>&em=<?php echo urlencode(base64_encode($row['email'])); ?>'>Update </a></td>
      <td><a href='delete.php?id=<?php echo urlencode(base64_encode($row['id'])); ?>' onclick='return checkdelete()'>Delete </a></td>
      </tr>

  <?php }
    echo "</table>";
  } else {
    echo "0 results";
    $conn->close();
  }



  ?>



</body>

</html>