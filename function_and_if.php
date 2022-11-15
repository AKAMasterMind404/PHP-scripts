<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="undefined.php", method="GET">

    </form>
    <?php 
    function sout($param){
        echo $param; echo "<br>";
    }

    function add($a1, $a2){
        return $a1 + $a2;
    }
    
    sout("Atharv");
    sout(add(4,5));
    
    if(false) {}
    elseif (false){}
    else {sout("THIS IS REACHED!");}

    if(7+3>6){
        sout("7 + 3 IS GREATER THAN 6!");
    }
    if(6==6){
        sout("6 IS EQUAL TO 6!");
    }
    if(7!=6){
        sout("7 IS NOT EQUAL TO 6!");
    }
    ?>
    
</body>
</html>