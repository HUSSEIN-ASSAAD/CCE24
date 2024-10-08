<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel='stylesheet' href='login.css'>
</head>

<body>

    <section>
        <div class="form-box">
            <div class="form-value">
                <form method="POST" action="loginAction.php">
                    <h2>Login</h2>
                    <div class="inputbox"> <ion-icon name="mail-outline"></ion-icon> <input type="email" name="email" required>
                        <label>Email</label>
                    </div>
                    <div class="inputbox"> <ion-icon name="lock-closed-outline"></ion-icon> <input type="password"
                            name="password" required> <label>Password</label> </div>
                    <div class="forget"> <label><input type="checkbox" name="remember">Remember Me</label> <a href="#">Forgot
                            Password</a> </div> <button type="submit">Log In</button>
                    <div class="register">
                        <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section> 

</body>

</html>
