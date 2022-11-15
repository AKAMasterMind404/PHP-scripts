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
    $longText = "My name is Atharv";
    $demo = strtoupper($characterName);
    $d1 = str_replace("name", "identity", $longText);
    $substringEg = substr($longText, 0,2);

    echo "Hello, World!";    
    echo "<hr>";    
    echo "The owner of this website is $demo <br>";
    echo "Indexing: $demo[0], $demo[1], $demo[2],  <br>";
    echo "Original String: $longText,  <br>";
    echo "Used str_replace String: $d1  <br>";    
    echo "Substring String: $substringEg  <br>";    
    ?>

</body>
</html>