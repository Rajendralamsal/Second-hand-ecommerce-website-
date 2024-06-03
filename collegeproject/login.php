<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="wrapper">
    <header>Login Form</header>
    <form id="loginForm" method="post" action="index.php">
        <?php
        if (!empty($error)) {
            echo '<p style="color:red;">' . $error . '</p>';
        }
        ?>
        <div class="field email">
            <div class="input-area">
                <input type="text" name="email" placeholder="Email Address" class="email">
                <i class="icon fas fa-envelope"></i>
                <i class="error error-icon fas fa-exclamation-circle"></i>
            </div>
            <div class="error error-txt">Email can't be blank</div>
        </div>
        <div class="field password">
            <div class="input-area">
                <input type="password" name="password" placeholder="Password" class="password">
                <i class="icon fas fa-lock"></i>
                <i class="error error-icon fas fa-exclamation-circle"></i>
            </div>
            <div class="error error-txt">Password can't be blank</div>
        </div>
        <div class="pass-txt"><a href="#">Forgot password?</a></div>
        <input type="button" value="Login" onclick="validateAndSubmit()">
    </form>
    <div class="sign-txt">Not yet a member? <a href="#">Signup now</a></div>
</div>

<script>
    function validateAndSubmit() {
        var email = document.querySelector(".email input").value;
        var password = document.querySelector(".password input").value;

        // Form validation
        if (!email || !password) {
            alert("Please fill in both email and password fields.");
            return;
        }

        // Submit the form
        document.getElementById("loginForm").submit();
    }
</script>

</body>
</html>
