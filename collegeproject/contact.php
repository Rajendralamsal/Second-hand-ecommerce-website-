<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact.css"> <!-- Link to your CSS file -->
</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <img src="logo.png" alt="Logo" class="logo-img">
        </div>
        <ul class="nav-links">
            <li><a href="home.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.html" class="active">Contact</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="sign-up.html">Sign Up</a></li>
        </ul>
    </nav>
   
        <h1>Contact Us</h1>
        <p>Have questions or feedback? Drop us a message!</p>
        <form action="submit_form.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <div class="contact-info">
                <h3>Contact Us:</h3>
                <p>Email: lamsayush1@gmail.com</p>
                <p>Phone: +977-9867584455</p>
                <p>Address: Tilottama, Butwal, Nepal</p>
            </div>
            <div class="payment-methods">
                <h3>Accepted Payment Methods:</h3>
                <ul>
                    <li><img src="khalti.png" alt="Khalti logo" class="payment-logo"></li>
                    <li><img src="eSewa.png" alt="eSewa logo" class="payment-logo"></li>
                    <li><img src="ebl.jpg" alt="EBL logo" class="payment-logo"></li>
                    <li><img src="nic asia.png" alt="NIC Asia logo" class="payment-logo"></li>
                </ul>
            </div>
        </div>
        <p class="copyright">Copyright © 2024 Rajendra Lamsal. All rights reserved.</p>
    </footer>
</body>

</html>
