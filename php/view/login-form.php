<?php
    require_once (__DIR__ . "/../model/config.php");
?>

<h1>Login</h1>

<form method="post" action="<?php echo $path . "controller/login-logout/login-user.php" ?>">
    <!-- checks for you to login -->
    <div>
        <label for="username">Username:</label>
        <input type="text" name="username" />
    </div>
    
    <div>
        <label for="password">Password:</label>
        <input type="password" name="password" />
    </div>
    
    <div>
        <button type="submit">Join The Battle!</button>
    </div>
    <!-- will verify if username and password is correct. -->
</form>