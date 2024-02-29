<?php
include "db_connect.php";  
session_start();  
?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="css.css">
    <title>Login Page</title>
</head>
<body>
    
    <h1 id = 1  style="text-align: center;"></h1><br>
    <h1 id = 2></h1>
    <div class="container" id="loginContainer">
        <form id="loginForm" action="backend.php" method="post" >
            <h2>Login</h2>
            <label for="username">Username:</label>
            <input type="text" id="username" name="email">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <button class="button" name="login" type="submit">Login</button>
            <div id="loginStatus"></div>
        </form >

    </div>

</body>
</html>
