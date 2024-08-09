<?php
require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include database connection
include('db-config/connection.php');

// Check if the form is submitted
if(isset($_POST["username"], $_POST["email"], $_POST["pass"])) {

    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // Insert user data into database
    $query = "INSERT INTO `user`(`name`, `email`, `pas`) VALUES ('$username','$email','$pass')";
    $result = mysqli_query($con, $query);

    // Check if the data is inserted successfully
    if($result) {
        // Start session and store username
        session_start();
        $_SESSION['username'] = $username;

        // Send welcome email to the user
        $mail = new PHPMailer(true);
        try {
            // SMTP configuration
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'hatech125@gmail.com'; // Your Gmail email address
            $mail->Password = 'ycqcvtsoqtkgwktl'; // Your Gmail password
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            // Sender and recipient settings
            $mail->setFrom('hatech125@gmail.com'); // Replace with your name
            $mail->addAddress($email, $username);

            // Email content
            $mail->isHTML(true);
            $mail->Subject = 'Welcome to our website';
            $mail->Body = "Dear $username,<br><br>Thank you for signing up friendery.";

            // Send email
            $mail->send();
            // Redirect to welcome page
            header('location: welcome.php');
        } catch (Exception $e) {
            // Handle email sending error
            echo "Failed to send email. Error: {$mail->ErrorInfo}";
        }
    } else {
        // Handle database insertion error
        echo "Failed to insert data into the database.";
    }
} else {
    // Handle form submission error
    echo "Form data is not complete.";
}
?>
