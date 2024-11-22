<?php 
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        echo $_POST ['username'] ;
        echo "<br>";
        echo $_POST ['password'] ;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In </title>
</head>
<body>
    <form action="" method="post">
    <input type="text" placeholder="username" name="username">
    <input type="password" name="password" placeholder="password">
    <input type="submit" value="send">
    </form>
</body>
</html>