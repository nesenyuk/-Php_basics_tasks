<html>
<head>
    <title>Calculator</title>
</head>
<Body>
<form action="15.php" method="get">
    Первое число<br>
    <input type="text" name="a"/><br>
    Второе число<br>
    <input type="text" name="b"/><br><br>
    <input type="radio" name="operation" value="+"/>+
    <input type="radio" name="operation" value="-"/>-
    <input type="radio" name="operation" value="*"/>*
    <input type="radio" name="operation" value="/"/>/
    <input type="radio" name="operation" value="%"/>%<br><br>
    <input type="submit" name="count" value="count"/>
    <input type="reset" name="reset" value="delete"/>
</form>
<?php

$a=$_GET["a"];
$b=$_GET['b'];
$operation=$_GET['operation'];
    if ($operation == "+") {
        $c = $a + $b;
        echo "Ваш результат" . " " . $c;
    } elseif ($operation == "-") {
        $d = $a - $b;
        echo "Ваш рузультат" ." ". $d;
    } elseif ($operation == "*") {
        $e = $a * $b;
        echo "Ваш рузультат"." ". $e;
    } elseif ($operation == "/") {
        $f = $a / $b;
        echo " Ваш рузультат"." ". $f;
    }
    elseif ($operation == "%") {
        $g = $a % $b;
        echo " Ваш рузультат"." ". $g;
    }
?>

</Body>
</html>