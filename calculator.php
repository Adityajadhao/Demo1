
<html>  
<body>

<form action="calculator.php" method="post">
	Num1<input type="number" name="num1"><br>
	
	Op<input type="text" name="op"><br>
	
	Num2<input type="number" name="num2"><br>
	
	<input type="submit">
</form>
<?php
  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];
  $op = $_POST["op"];
  if($op == "+"){
	  echo $num1 + $num2;
  } elseif($op == "-"){
	  echo $num1 - $num2;
  } elseif ($op == "/") {
	  echo $num1 / $num2;
  } elseif ($op == "*"){
	  echo $num1 * $num2;
  } else{
	  echo "invalid Choice";
  }

?>

	</body>
</html>
	