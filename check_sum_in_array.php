<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post">
    <input type="text" name="nhap" placeholder="nhapso">
    <input type="submit" value="check">
    <?php
    $number=array(1,2,3,4);
    $a=1;
    $b=2;
    function check($number,$a,$b){
            if($a==$_POST["nhap"]){
                echo "sum=".array_sum($number);
            }
        }  if($b==$_POST["nhap"]){
         sort($number);
         foreach ($number as $x){
             echo "<br>$x";
         }
    }
    check($number,$a,$b);
    ?>
</body>
</html>
