<!DOCTYPE html>
<html>
<head>
    <title>Login Application</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            height: 100vh; /* 100% viewport height */
        }

        .container {
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            text-align: center;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 10px;
            box-sizing: border-box; /* Include padding and borders within width */
        }

        .action-links {
            text-align: center; /* Center-align the content */
            margin-bottom: 15px;
        }

        a {
            text-decoration: none;
            color: #0077cc;
            margin-right: 10px;
        }

        .login-button {
            background-color: #00aaff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 3px;
            cursor: pointer;
        }

        /* Style for the image */
        .logo-img {
            width: 150px;
            height: 150px;
            margin: 0 auto 20px; /* Center the image horizontally and add space below */
            display: block; /* Ensure the image is centered */
        }

        /* Add a new style for the message */
        #login-message {
            display: none;
            color: green; /* You can change the color to your preference */
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="bgimage/gengar.png" alt="Logo" class="logo-img">
        <h1>Login Application</h1>
        <form action="" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <div class="action-links">
                <a href="#">Create New Account</a> |
                <a href="#">Forgot Password</a>
            </div>

            <button type="submit" class="login-button">LOG IN</button>
        </form>

        <!-- Add a new div for the message after login -->
        <div id="login-message"></div>
    </div>

    <!-- Add a script to handle the message after login -->
    <script>
    // Get a reference to the form
    const form = document.querySelector('form');

    // Add an event listener for the form submission
    form.addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent the default form submission behavior

        // Simulate a successful login (you should replace this with actual login logic)
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        // Check the username and password (replace this with actual validation)
        if (username === 'user' && password === 'user') {
            // Redirect to the desired URL after a successful login
            window.location.href = 'http://localhost/jeff_web/lpu_web_application/admin.php'; // Replace with your desired URL
        } else {
            // Display an error message (replace this with your error handling)
            alert('Login failed. Please check your username and password.');
        }
    });
</script>
</body>
</html>
