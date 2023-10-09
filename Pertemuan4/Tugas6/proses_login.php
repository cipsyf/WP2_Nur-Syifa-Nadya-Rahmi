<?php 
    $username = $_POST['username'];
    $password = $_POST['password'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" type="text/css" href="style_login.css">
    </head>
    <body align="center">
        <?php
            echo "<br><br><br>";
            echo "<h1>Anda berhasil login!</h1><br>";
            echo "<h4>Selamat datang, $username!</h4>";
            echo "<a href='login.html'>Logout</a>"
        ?>
    </body>
</html>