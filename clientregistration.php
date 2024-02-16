<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Registration</title>
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
    <script>
        function validatePassword() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirm-password").value;

            if (password !== confirmPassword) {
                alert("Passwords do not match");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="container">
        <form action="register.php" method="post" onsubmit="return validatePassword()">
            <h1>Client Registration</h1>
            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="organization">Organization</label>
                <input type="text" id="organization" name="organization" required>
            </div>
            <div class="input-group">
                <label for="facebook">Facebook Link</label>
                <input type="url" id="facebook" name="facebook">
            </div>
            <div class="input-group">
                <label for="instagram">Instagram Link</label>
                <input type="url" id="instagram" name="instagram">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
