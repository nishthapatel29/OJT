<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="#" method= "GET">
    Name: <input type="text" name="name" />
    Age:<input type="text" name="age" />
    <button type="submit">submit</button>
</form>
<?php

if($_GET["name"]||$_GET["age"])
{
    echo "Hello" . $_GET['name']."<br/>";
    echo "you are" . $_GET['age']." year old.";
    exit();
}
?>
</body>
</html>
