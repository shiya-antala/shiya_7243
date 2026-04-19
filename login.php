<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI';
            background: linear-gradient(135deg, #4CAF50, #2E7D32);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .box {
            background: white;
            padding: 30px;
            border-radius: 12px;
            width: 320px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
        }

        button {
            width: 100%;
            padding: 10px;
            background: green;
            color: white;
            border: none;
        }

        .error {
            color: red;
            margin-top: 10px;
        }

        a {
            color: blue;
            text-decoration: none;
        }
    </style>
</head>

<body>

<div class="box">
<h2>Login 🔐</h2>

<form method="POST">
    <input type="email" name="email" placeholder="Enter Email" required>
    <input type="password" name="password" placeholder="Enter Password" required>
    <button name="login">Login</button>
</form>

<?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $res = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$pass'");
    $user = mysqli_fetch_assoc($res);

    if ($user) {
        $_SESSION['user'] = $email;
        header("Location: index.php");
    } else {
        echo "<div class='error'>Invalid Login ❌</div>";
        echo "<p>Don't have an account? <a href='register.php'>Sign Up</a></p>";
    }
}
?>

</div>

</body>
</html>