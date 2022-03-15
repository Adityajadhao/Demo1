<html lang="en">
<head>
    <form action="calcii.php" method="post">
    SIMPLE CALCULATOR<br> <input type="text" name="num"><br>
    <input type="submit">
    </form>
    <?php
    $newstr=$_POST["num"];
    $op='';
    for($x=0;$x<strlen($newstr);$x++){
        if($newstr[$x]=='+'){
            $op=$newstr[$x];
        }
        elseif($newstr[$x]=='-'){
            $op=$newstr[$x];
        }
        elseif ($newstr[$x]=='*') {
            $op=$newstr[$x];
        }
        elseif ($newstr[$x]=='/') {
            $op=$newstr[$x];
        }
        else {
            continue;
        }
    }
    $nums= explode($op, $newstr);
    $num1= $nums[0];
    $num2= $nums[1];
    if ($op=="+") {
        echo $num1+$num2;
    }
    else
    print_r($nums)


    ?>