<?php
session_start();

// Handle adding items to cart
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_to_cart'])) {
    $item_name = $_POST['item_name'];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $_SESSION['cart'][] = $item_name;

    // Redirect back to clothes page
    header("Location: cloth.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>🛒 Your Cart</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f0f8ff;
            text-align: center;
            padding: 20px;
        }
        h2 {
            color: #003366;
        }
        ul {
            list-style-type: none;
            padding: 0;
            max-width: 500px;
            margin: 0 auto;
        }
        li {
            background-color: #fff;
            margin: 10px 0;
            padding: 12px 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            font-size: 18px;
            color: #333;
        }
        .back-btn {
            display: inline-block;
            padding: 12px 24px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: background-color 0.3s;
            margin-top: 25px;
        }
        .back-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <h2>🛒 Your Cart Items</h2>

    <ul>
        <?php
        if (!empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $item) {
                echo "<li>$item</li>";
            }
        } else {
            echo "<li>Your cart is empty!</li>";
        }
        ?>
    </ul>

    <a href="cloth.php" class="back-btn">🔙 Continue Shopping</a>

</body>
</html>
