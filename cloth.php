<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>👗 Stylish Clothes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f0f8ff;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        h2 {
            margin-top: 30px;
            font-size: 28px;
            color: #003366;
        }
        p {
            color: #444;
            font-size: 16px;
            margin-bottom: 20px;
        }
        .top-cart {
            text-align: right;
            padding: 10px 20px;
        }
        .top-cart a {
            text-decoration: none;
            font-size: 18px;
            color: #333;
        }
        .gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .item-card {
            background-color: #fff;
            padding: 10px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .item-card img {
            width: 100%;
            height: 390px;
            object-fit: cover;
            border-radius: 8px;
        }
        .item-card form {
            margin-top: 10px;
        }
        .item-card button {
            background-color: #007BFF;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            transition: 0.3s;
        }
        .item-card button:hover {
            background-color: #0056b3;
        }
        .item-card i {
            margin-right: 6px;
        }
        .item-card h4 {
            margin: 10px 0 5px;
            font-size: 18px;
            color: #222;
        }
        .item-card p {
            font-size: 16px;
            color: #007BFF;
            margin: 5px 0 10px;
        }
        .back {
            display: inline-block;
            margin: 25px 0;
            text-decoration: none;
            color: #4CAF50;
            font-weight: bold;
        }
        @media (max-width: 768px) {
            .gallery {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 500px) {
            .gallery {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    <div class="top-cart">
        <a href="cart.php"><i class="fas fa-shopping-cart"></i> View Cart</a>
    </div>

    <h2>👗 Stylish Clothes</h2>
    <p>Trendy fashion for all seasons!</p>

    <div class="gallery">
        <?php
        $clothes = [
            ["https://romantic-fairytale.com/cdn/shop/files/30_4b9d6f75-2ed1-4df7-b952-be15cd0e591a.jpg?v=1739855237&width=754", "Summer Dress", 999],
            ["https://image.made-in-china.com/318f0j00GTkRMYVtIhqC/ucgn1tv1kfeyb7ou3lc-361715292330-mp4-264-hd-unlimit-taobao-mp4.webp", "Casual shirt", 1500],
            ["https://m.media-amazon.com/images/I/71DiSFTsnWL._AC_SX679_.jpg", "Oversized Tee", 799],
            ["https://img.tatacliq.com/images/i15//437Wx649H/MP000000020021335_437Wx649H_202312301602151.jpeg", "Cot Set", 1199],
            ["https://i.pinimg.com/1200x/55/64/da/5564daf2fa83d205fa6e5ce82abfe1f7.jpg", "Skirt", 949],
            ["https://cdn.shopify.com/s/files/1/0486/0634/7416/files/KNTR121BLAC_d85b57f3-d4fe-4887-92f4-730550b11efb.jpg?v=1745492155", "Floral pair", 999],
            ["https://i.pinimg.com/736x/ce/0c/2c/ce0c2c09b169d64f7462e66edf38fc74.jpg", "Pent", 1599],
            ["https://i.pinimg.com/736x/dd/1e/2b/dd1e2beee33a028a6bcc664a1f3de4e8.jpg", "Polka Dot Dress", 1099],
            ["https://img.joomcdn.net/3b034c661920a9a49796a09d36c57bfe64e537e9_original.jpeg", "Denim Jacket", 1399],
            ["https://i.pinimg.com/736x/9c/3f/74/9c3f74b3da0117aa9b6fe009e0d2315b.jpg", "Kurti", 999],
            ["https://m.media-amazon.com/images/I/71ktl8Pq4BL._AC_UY1000_.jpg", "party dress", 1999],
            ["https://www.litlookzstudio.com/cdn/shop/files/Fairy-Grunge-Drawstring-Parachute-Pants.jpg?v=1699320733", "Cargo Pants", 899]
        ];

        foreach ($clothes as $item) {
            $img = $item[0];
            $name = $item[1];
            $price = $item[2];

            echo "<div class='item-card'>
                    <img src='$img' alt='$name'>
                    <h4>$name</h4>
                    <p><strong>₹$price</strong></p>
                    <form method='post' action='cart.php'>
                        <input type='hidden' name='item_name' value='$name'>
                        <input type='hidden' name='item_price' value='$price'>
                        <button type='submit' name='add_to_cart'>
                            <i class='fas fa-cart-plus'></i> Add to Cart
                        </button>
                    </form>
                  </div>";
        }
        ?>
    </div>

    <a class="back" href="index.php">🔙 Back to Home</a>

</body>
</html>