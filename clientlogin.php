<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: url('https://e0.pxfuel.com/wallpapers/199/819/desktop-wallpaper-yuji-itadori-satoru-gojo-megumi-fushiguro-nobara-kugisaki-jujutsu-kaisen.jpg') center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        form {
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 2em;
        }

        .input-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 1.2em;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        button {
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            font-size: 1.2em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>

</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <?php
        // Check for the registration success message in PHP
        if(isset($_GET['registration']) && $_GET['registration'] === 'success') {
            echo '<p style="color: green;">Registration successful! You can now login with your credentials.</p>';
        }
        ?>
        <form action="login_process.php" method="post">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="clientregistration.html">Register here</a></p>
    </div>
</body>
</html>
