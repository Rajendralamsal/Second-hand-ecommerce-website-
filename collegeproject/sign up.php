<?php
 

$servername = "localhost"; 
$username = "root"; 
$password = ""; 

$database = "geeksforgeeks"; 

// Create a connection 
$conn = mysqli_connect($servername, 
    $username, $password, $database); 

// Code written below is a step taken 
// to check that our Database is 
// connected properly or not. If our 
// Database is properly connected we 
// can remove this part from the code 
// or we can simply make it a comment 
// for future reference. 

if($conn) { 
    echo "success"; 
} 
else { 
    die("Error". mysqli_connect_error()); 
} 
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="sign up.css">
</head>
<body>
    <div class="container">
        <form class="signup-form" method="post" action="process_signup.php">
            <h2>Create an Account</h2>
            <div class="input-group">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>
            <div class="input-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <button type="submit" name="signup">Sign Up</button>
            <p>Already have an account? <a href="login.html">Log in here</a></p>
        </form>
    </div>
</body>
</html>
