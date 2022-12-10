<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login Form</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <img src="./photo/strap.png" alt="logo">
        <div class="card">
            <div class="user">
                <h1>Sign in to Strapi</h1>
                <form method="POST" action="login.php"></form>
                <label>Username</label>
                <input type="text" name="username" id="username">
            </div>
            <div class="pass">
                <label>Password</label>
                <input type="password" name="password" id="password">
            </div>
            </form>
                <div class="btn">
                <button type="submit" class="bt">Sign In</button></a>
                </div>
                <div class="register">
                    <p>dont have account? Click <a href="register-form.php">here.</a>
                </div>
            </div>
        </div>
        </form>
    </body>
</html>