<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $characterName = "Atharv";
    $age = 21;
    $string1 = "To be or not to be";
    $int1 = 30;
    $float1 = 30.56;
    $bool1 = true;
    $array1 = array(1,2,3,4,5,6,7);
    $array1 = array("atharv","b","c","d");
    $associative_array1 = array("atharv" => "0","b" => "1","c" => "2","d" => "3");

    // echo "Hello, World!";
    // echo "<hr>";    
    // echo "The owner of this website is $characterName <br>";
    // echo "My Age is $age <br>";
    // echo "$string1, that is the question <br>";
    // echo "Printing values: $int1 and $float1 as well as this boolean: $bool1 <br>";
    for ($i=0; $i < count($array1); $i++) { 
        echo $array1[$i]; echo "<br>";
    };

    $len = count($associative_array1);
    echo "Example of an Associative array(Dictionary): $len<br>";
    echo "Key: atharv, Value: "; echo $associative_array1["atharv"]; echo "<br>";
    echo "Key: b, Value: "; echo $associative_array1["b"]; echo "<br>";
    echo "Key: c, Value: "; echo $associative_array1["c"]; echo "<br>";
    echo "Key: d, Value: "; echo $associative_array1["d"]; echo "<br>";
 
    ?>
</body>
</html>