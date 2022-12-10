<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login Form</title>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <a href="login-form.php"><button class="bck" type="submit">⇦ Back</button></a>
        <form method="POST" action="register.php">
        <div class="card">
            <h1>Create Account</h1>
            <form method="POST" action="register.php"></form>
            <div class="user">
                <label>Username</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="email">
                <label>Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="password">
                <label>Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="confirm_password">
                <label>Confirm Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="btn">
            <a href="register.php"><button type="submit"class="bt">Sign Up</button</a>
            </div>
        </div>
        </form>
        
    </body>
</html>