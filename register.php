<?php include 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>

    <style>
        body {
            font-family: Arial;
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .box {
            background: white;
            padding: 25px;
            border-radius: 10px;
            width: 300px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            text-align: center;
        }

        input {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
        }

        button {
            padding: 10px;
            width: 100%;
            background: green;
            color: white;
            border: none;
        }

        a {
            text-decoration: none;
            color: blue;
        }
    </style>
</head>

<body>

<div class="box">
<h2>Register</h2>

<form method="POST">
    <input type="email" name="email" placeholder="Enter Email" required>
    <input type="password" name="password" placeholder="Enter Password" required>
    <button name="register">Register</button>
</form>

<br>
<a href="login.php">Already have account? Login</a>

<?php
if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    mysqli_query($conn, "INSERT INTO users (email, password) VALUES ('$email', '$pass')");

    echo "<p style='color:green;'>Registered Successfully!</p>";
}
?>

</div>

</body>
</html>