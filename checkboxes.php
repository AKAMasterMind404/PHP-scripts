<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkboxes.php", method="POST">
    Apples: <input type="checkbox", name="box1[]" value="Apples"> <br>
    Oranges: <input type="checkbox", name="box1[]" value="Oranges"> <br>
    Pears: <input type="checkbox", name="box1[]" value="Pears"> <br>

    <input type="submit">

    </form>
    <?php
    $box1 = $_POST["box1"];

    for ($i=0; $i < count($box1); $i++) { 
        echo $i; echo $box1[$i]; echo "<br>";
    }

    echo $box1[0]; echo "<br>";
    echo $box1[1]; echo "<br>";
    echo $box1[2]; echo "<br>";
    ?>
    
</body>
</html>