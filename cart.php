<?php
session_start();

// Handle Add to Cart
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_to_cart'])) {
    $item_name = $_POST['item_name'];
    $item_price = $_POST['item_price'];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Add item as array (name & price)
    $_SESSION['cart'][] = [
        'name' => $item_name,
        'price' => (int) filter_var($item_price, FILTER_SANITIZE_NUMBER_INT)
    ];

    // Redirect to avoid resubmission
    header("Location: cart.php");
    exit();
}

// Clear cart if requested
if (isset($_GET['clear']) && $_GET['clear'] == 1) {
    unset($_SESSION['cart']);
    header("Location: cart.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
            text-align: center;
        }

        h2 {
            color: #8B0000;
        }

        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            border-bottom: 1px solid #ccc;
        }

        th {
            background-color: #FF4081;
            color: white;
        }

        tr:last-child td {
            border-bottom: none;
        }

        .total {
            font-weight: bold;
            color: #333;
        }

        .back {
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
            font-weight: bold;
            color: #4CAF50;
        }

        .clear {
            margin-top: 10px;
            display: inline-block;
            color: red;
        }
    </style>
</head>
<body>

<h2>🛒 Your Shopping Cart</h2>

<?php
if (!empty($_SESSION['cart'])) {
    echo "<table>
            <tr>
                <th>Product</th>
                <th>Price</th>
            </tr>";

    $total = 0;
    foreach ($_SESSION['cart'] as $item) {
        echo "<tr>
                <td>{$item['name']}</td>
                <td>₹{$item['price']}</td>
              </tr>";
        $total += $item['price'];
    }

    echo "<tr>
            <td class='total'>Total</td>
            <td class='total'>₹$total</td>
          </tr>
        </table>";
} else {
    echo "<p>Your cart is empty.</p>";
}
?>

<!-- Always go back to Home -->
<a class="back" href="index.php">🔙 Continue Shopping</a><br>

<?php if (!empty($_SESSION['cart'])): ?>
    <a class="clear" href="cart.php?clear=1">🗑️ Clear Cart</a>
<?php endif; ?>

</body>
</html>
