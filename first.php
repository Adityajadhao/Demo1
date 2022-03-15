<!DOCTYPE html>
<html lang="en">
<head>
<style>
form {

border: 3px solid #f1f1f1;

padding: 15px;

margin: 50px 200px 200px 200px;

background-color:#e6f9ff;

border: solid;

text-align:center;

}

button {

background-color: white;

width: 20%;

color: black;

padding: 10px;

margin: 20px 20px ;

border: black;

cursor: pointer;

 }

input[type=text]

{

width: 50%;

margin: 8px 0;

padding: 12px 20px;

display: inline-block;

border: 2px solid black;

box-sizing: border-box;

}

</style>

</head>
<body><form action="first.php" method="post">
    <b>SIMPLE CALCULATOR</b>
    <br></br>
    <br> <input type="text" name="num" value="<?php if(isset($_POST['num'])){ echo $_POST['num'];}?>"><br>
    <br></br>
    <button type="submit" value="Calculate">Calculate</button>
    <br></br>
    <?php
    $input ="";
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
    $input = $_POST["num"];
    if (empty($input))
    {
        echo "this field cannot be empty";
    }
    else{
    // echo $input[0];
    $op='';
    
    for ($a=0;$a<strlen($input);$a++){
        if ($input[$a]=="+"){
            $op=$input[$a];
        }
        elseif($input[$a]=="-"){
            $op=$input[$a];
        }
        elseif($input[$a]=="*"){
            $op=$input[$a];
        }
        elseif($input[$a]=="/"){
            $op=$input[$a];

        }
        else{
            continue;
        }
    }

    $newstr= explode($op,$input);
    $num1= $newstr[0];
    $num2= $newstr[1];

    if($op == "+"){
        echo $num1 + $num2;
    } elseif($op == "-"){
        echo $num1 - $num2;
    } elseif ($op == "/") {
        if (($num1!="0") && ($num2!="0")){
            echo $num1 / $num2;

        }
        else{
            echo "invalid numbers";
        }
        
    } elseif ($op == "*"){
        echo $num1 * $num2;
    } 
    }
}
    

    ?>
    </form>
    
</body>
</html>