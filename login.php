<?php
if (isset($_POST['submitRegister'])) {

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NetFlix-CLONE Login</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
    <div class="signInContainer">
        <div class="column">
            <div class="header">
                <img src="assets/img/logo.png" title="logo" alt="Site Logo">
                <h3>Sign In</h3>
                <span>to continue to NetFlix Clone</span>
            </div>
            <form action="" method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required> 

                <button type="submit" name="submitLogin">Login</button>
            </form>

            <a href="register.php" class="signInMessage">Need an account? Sign up here!</a>
        </div>
    </div>

</body>
</html>