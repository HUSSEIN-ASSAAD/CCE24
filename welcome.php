<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome</title>
<meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Sign Up</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel='stylesheet' href='signup.css'>
</head>
<body>
<section>
    <?php echo "Welcome ".$_SESSION['username']; ?>
    </section> 
</body>
</html>