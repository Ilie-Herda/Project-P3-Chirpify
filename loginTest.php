<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <title>Register</title>
</head>
<style>
    <?php include "Css/main.css"?>
</style>
<body>
<form method="POST" action="Login.php" class= "gtr">
    <label for="username">Username:</label>
    <input type="text" name="username" autocomplete="off"><br>
    <label for="password">Password:</label>
    <input type="password" name="password" required><br>
    <a class=JxN href="#"> Forgot password?<a>
            <button type="submit">Login</button>
</form>
</body>