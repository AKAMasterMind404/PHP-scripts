<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "simple_calculator.php", method = "GET">
    Number 1: <input type="number", method = "GET", name="num1"> <br>
    Number 2: <input type="number", method = "GET", name="num2"> <br>
    <input type="submit">
    </form>
    <?php
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];

    echo "The addition is equal to "; echo $num1 + $num2;
    ?>
</body>
</html>