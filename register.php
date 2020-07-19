<?php
if (isset($_POST['submitRegister'])) {

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NetFlix-CLONE REGISTER</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
    <div class="signInContainer">
        <div class="column">
            <div class="header">
                <img src="assets/img/logo.png" title="logo" alt="Site Logo">
                <h3>Sign Up</h3>
                <span>to continue to NetFlix Clone</span>
            </div>
            <form action="" method="POST">
                <input type="text" name="firstName" placeholder="First Name" required>
                <input type="text" name="lastName" placeholder="Last Name" required>
                <input type="text" name="username" placeholder="Username" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="email" name="email2" placeholder="Confirm email" required>
                <input type="password" name="password" placeholder="Password" required> 
                <input type="password" name="password2" placeholder="Confirm Password" required>

                <button type="submit" name="submitRegister">Register</button>
            </form>

            <a href="login.php" class="signInMessage">Already have an account? Sign in here!</a>
        </div>
    </div>

</body>
</html>