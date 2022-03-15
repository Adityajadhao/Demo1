<html lang="en">
<head>

</head>
<body>
    <form action="second.php" method="post">
    ENTER INPUT <br> <input type="text" name="txt"><br>
    <button type="submit"> Submit </button><br>
    
    <?php
    $input ="";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
       $input = $_POST["txt"];
       if (empty($input))
    {
        echo "this field cannot be empty";
    }
    else{
       $l=strlen($input);
       
       if ($l % 2 ==0){
           echo "input:: ". $input.'<br>',"count::".$l.'<br>';
           }
        else{
            echo "!!please enter even numbered string!!";
            die;
        }
        $mid=strlen($input)/2;
        $str1=substr($input,0,$mid);
        $str2=substr($input,$mid);
        $revstr1=strrev($str1);
        
        echo "first String is: ".$str1.'<br>';
        echo "Reverse of Above String::".$revstr1.'<br>';
        echo "Second String is: ".$str2.'<br>';

        $concat=$revstr1.$str2;
        echo "New String is::  ". $concat.'</br>';
        $strtoarr=str_split($input);
        echo "Sucessfully Converted to ";
        print_r ($strtoarr);
        echo '<br>'. "Array Count::".count($strtoarr).'<br>';
        array_push ($strtoarr,'A','B');
        echo "new items added:";
        print_r ($strtoarr);
        echo "<br>";
        $desc=rsort($strtoarr);
        echo "Desc Array:: ";
        print_r ($strtoarr);
        $slice=array_slice($strtoarr,2);
        echo "<br>"."items removed  :";
        print_r ($slice);
        echo"<br>";
        error_reporting(E_ALL ^ E_WARNING);
        echo "final String: ".$input.$concat;
        

 





    }
}
    ?>
    </form>
</body>
</html>

        

    