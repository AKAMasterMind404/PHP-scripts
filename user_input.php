<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "user_input.php" method="GET">
        Name: <input type="text" name="name_variable"> <br><br>
        Age: <input type="number" name="age_variable"> <br><br>
        <input type="submit">
    </form>

    <?php 
        echo "Your name is "; echo $_GET["name_variable"]; echo "<br>";
        echo "Your age is "; echo $_GET["age_variable"]; echo "<br>";
    ?>

</body>
</html>