
<?php
    include('db-config/connection.php');
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="SELECT * FROM `user` WHERE `email` LIKE '$email' AND `pas` LIKE '$password';";
    $result=mysqli_query($con,$query);
    $rows=mysqli_num_rows($result);
    if($rows>0){
        $row=mysqli_fetch_array($result);
        $username=$row["name"];
        session_start();
        $_SESSION['username']=$username;
        header('location:welcome.php');   
    }
    else echo "Invalid credentials";
    ?>