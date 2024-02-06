<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<link rel="stylesheet" href="forgot.css" class="rel">
<body>
<form action="">
    <div class ="main">
        <div class ="box">
            <h1>Forgot Password</h1>
            <input type="email" name="" id="email" placeholder="Email">
            <input type="password" name="" id="password" placeholder="Password">
            <input type="password" name="" id="confirmPassword" placeholder="Confirm Password">
            <input type="submit" value="Forgot" id="forgot">
            <p>Already have an account? <a href="login.html" class="log">Login</a></p>
        </div>
    </div>
</form>
<?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirmPassword"];

        // Validate form data
        // Add more validation as needed
        if (empty($email) || empty($password) || empty($confirmPassword)) {
            echo "<p>All fields are required.</p>";
            exit;
        }
        if ($password !== $confirmPassword) {
            echo "<p>Passwords do not match.</p>";
            exit;
        }

        
        $conn = new mysqli("localhost", "email", "password", "forgetpassword");

       
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Update password in the database
        $sql = "UPDATE users SET password='$hashedPassword' WHERE email='$email'";

        if ($conn->query($sql) === TRUE) {
            echo "<p>Password updated successfully.</p>";
        } else {
            echo "<p>Error updating password: " . $conn->error . "</p>";
        }

        $conn->close();
    }
    ?>
</body>
</html>
