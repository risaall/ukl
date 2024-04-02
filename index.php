<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="form-box login">
            <h2>Login</h2>
            <form action="login.php" method="post">
                <div class="form-input">
                    <input type="text" name="Username" required>
                    <label>Username</label>
                </div>
                <div class="form-input">
                    <input type="password" name="Password" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox" name="remember">Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Don't have an account? <a href="register.php" class="register-link">Register</a></p>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>