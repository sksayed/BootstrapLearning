<?php
session_start();
if(!isset($_SESSION["id"])) {
    header("Location:index.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php
        echo "<h1>Welcome</h1>".$_SESSION["name"] ; 
    ?>
    
</body>
</html>