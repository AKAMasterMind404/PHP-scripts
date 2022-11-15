<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="complex_calculator.php", method="GET">
    Number 1: <input type="number", method = "GET", name="num1"> <br>
    Number 2: <input type="number", method = "GET", name="num2"> <br>
    Option: <input type="text", method = "GET", name="op"> <br>
    <input type="submit">
    </form>
    <?php
    $n1 = $_GET["num1"];
    $n2 = $_GET["num2"];
    $op = $_GET["op"];
    $answer;

    if($op=="+"){
        $answer = $n1 + $n2;
    }   
    elseif($op=="-"){$answer = $n1 - $n2;}
    elseif($op=="*"){$answer = $n1 * $n2;}
    elseif($op=="/"){$answer = $n1 / $n2;}
    elseif($op=="%"){$answer = $n1 % $n2;}
    else{echo "Invalid input!";echo "<br>";}

    switch($op){
        case "-":
            $answer = $n1 - $n2;
            break;
        case "*":
            $answer = $n1 * $n2;
            break;
        case "/":
            $answer = $n1 / $n2;
            break;
        case "+":
            $answer = $n1 + $n2;
            break;
        case "%":
            $answer = $n1 % $n2;
            break;
        default:
            echo "Invalid input!";echo "<br>";
            break;        
    }

    echo "The answer is "; echo $answer;
    ?>
    
</body>
</html>