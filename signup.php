<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Sign Up</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel='stylesheet' href='signup.css'>
</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form  action="signupAction.php" method="POST">
                    <h2>Sign Up</h2>
                    <div class="inputbox"> <ion-icon name="person-outline"></ion-icon> <input type="text" name="username" required>
                        <label>Username</label>
                    </div>
                    <div class="inputbox"> <ion-icon name="mail-outline"></ion-icon> <input type="email" name="email" required>
                        <label>Email</label>
                    </div>
                    <div class="inputbox"> <ion-icon name="lock-closed-outline"></ion-icon> <input type="password"
                            name="pass" required> <label>Password</label> </div>
                    <div class="inputbox"> <ion-icon name="lock-closed-outline"></ion-icon> <input type="password"
                            name="confirm_password" required> <label>Confirm Password</label> </div>
                    <button type="submit">Sign Up</button>
                    <div class="login">
                        <p>Already have an account? <a href="login.php">Log In</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section> 
</body>

</html>
