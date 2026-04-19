<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>💄 Beauty & Cosmetics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #fdf2f8;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        h2 {
            margin-top: 30px;
            font-size: 28px;
            color: #be185d;
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
            height: 300px;
            object-fit: cover;
            border-radius: 8px;
        }
        .item-card form {
            margin-top: 10px;
        }
        .item-card button {
            background-color: #ec4899;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            transition: 0.3s;
        }
        .item-card button:hover {
            background-color: #be185d;
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
            color: #be185d;
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

    <h2>💄 Beauty & Cosmetics</h2>
    <p>Enhance your natural beauty with premium cosmetics!</p>

    <div class="gallery">
        <?php
        $beauty = [
            ["https://images.meesho.com/images/products/358880594/2aqll_512.webp?width=512", "Lipstick Set", 1299],
            ["https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhMR1uKkr4EH4ivihVfbM2hgkatfWrOQHK8ySqXCEWJfGgtahzvL9geqkiQ_haChvA2LOf2N9eGe3J_V3wZ4nZSfsJWNkTaYx2SZkY5WTuxQmikvP6aqNqSQKh6mX-34xQL0mqyfvqjioQ/s1600/LAKME1.jpg", "Foundation", 1899],
            ["https://media6.ppl-media.com/tr:h-750,w-750,c-at_max,dpr-2,q-40/static/img/product/359034/swiss-beauty-ultimate-eyeshadow-palette-kit-multi-02-9-g-17-36_1_display_1718001909_13033c42.jpg", "Eyeshadow Palette", 2199],
            ["https://m.media-amazon.com/images/I/61YdJezaNRL._AC_UF1000,1000_QL80_.jpg", "Mascara", 999],
            ["https://s.alicdn.com/@sc04/kf/H2c674cf63a6e4328832559df8e46e0ddV/Hot-Selling-Private-Label-Custom-logo-PDRN-pink-Collagen-Capsule-Cream-Moisturizing-and-Tightening-Face-Cream.png_300x300.jpg", "Skincare Cream", 1499],
            ["https://aromatica.cr/cdn/shop/files/Good-Girl-Blush-EDP-para-mujer-80-ml-Aromatica-CR-365378.jpg?v=1727572489&width=1946", "Perfume", 2999],
            ["https://www.beautyberry.co.in/cdn/shop/files/Artboard1_abcadf9e-51f3-4e9f-bc88-9ad122a1f43f.jpg?v=1743077674", "Eyeliner", 699],
            ["https://images-static.nykaa.com/media/catalog/product/e/0/e0b44ac607845012351_1.jpg?tr=w-500", "Concealer", 1199],
            ["https://m.media-amazon.com/images/I/51RJiJfgx-L._AC_UF1000,1000_QL80_.jpg", "Blush", 899],
            ["https://images.meesho.com/images/products/429517359/hwzsv_512.webp?width=512", "Nail Polish Set", 799],
            ["https://d1puc9h291tp0h.cloudfront.net/uploads/all/AB0YQrB62FB6FKq5TKM5ariL3EqYZBrOmoMjF6S2.png", "Face Serum", 1799],
            ["https://cdn.shopify.com/s/files/1/0361/1987/1619/files/Honey_Infused_Haircare_Set_Gisou.jpg?v=1631261472", "Hair Care Set", 1699]
        ];

        foreach ($beauty as $item) {
            $img = $item[0];
            $name = $item[1];
            $price = $item[2];

            echo "<div class='item-card'>
                    <img src='$img' alt='$name'>
                    <h4>$name</h4>
                    <p><strong>₹$price</strong></p>
                    <form method='post' action='cart.php'>
                        <input type='hidden' name='item_name' value='$name'>
                        <input type='hidden' name='item_price' value='₹$price'>
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