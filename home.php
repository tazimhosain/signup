<?php
    session_start();

    if(!isset($_SESSION['user'])){
        header("Location : login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 style="text-transform: uppercase;">Welcome <?php echo $_SESSION['user']; ?></h1>

<a href="logout.php">Log Out</a>
</body>
</html>

