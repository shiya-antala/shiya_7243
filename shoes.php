<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stylish Shoes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome for cart icons -->
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
            color: #2c3e50;
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
            max-width: 1000px;
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
        .item-card button {
            background-color: #3498db;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
        }
        .item-card button:hover {
            background-color: #2980b9;
        }
        .item-card h4 {
            margin: 10px 0 5px;
        }
        .item-card p {
            margin: 5px 0;
            color: #333;
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

<h2>👟 Stylish Shoes</h2>
<p>All kinds of trendy footwear for every occasion.</p>

<div class="gallery">
    <?php
    $shoes = [
        ["https://images.unsplash.com/photo-1549298916-b41d501d3772?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80", "Nike Air Max", "₹2,999"],
        ["https://assets.myntassets.com/dpr_1.5,q_30,w_400,c_limit,fl_progressive/assets/images/2025/AUGUST/20/xbtW3Ylb_39bbbfda300b4c8a8c3eda74d67e738d.jpg", "Adidas Sneakers", "₹7,499"],
        ["https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_600,h_600/global/402603/01/fnd/IND/fmt/png/Club-Kayzer-Superior-Cushioning-Sneakers", "Puma sneakers", "₹5,999"],
        ["https://www.indifeet.in/cdn/shop/files/BLN006-BR-09.png?v=1770014686&width=600", "Formal Leather Shoes", "₹1,999"],
        ["https://shoethatfitsyou.in/cdn/shop/products/Black_stiletto.jpg?v=1571967681", "High Heels", "₹1199"],
        ["https://images-magento.shoppersstop.com/pub/media/catalog/product/GIRLSA33/GIRLSA33_BLACK/GIRLSA33_BLACK.jpg_2000Wx3000H", "Canvas Shoes", "₹2,299"],
        ["https://images.meesho.com/images/products/485657037/vmg1v_512.webp?width=512", "Boots", "₹1499"],
        ["https://image.made-in-china.com/2f0j00HzrboNWJhagi/Stylish-Buckle-Casual-Shoes-for-Ladies-Fashion-Shoe-Flats-Women-Footwear-Lady-Loafers-Slip-on-Loafer.webp", "Casual Loafers", "₹999"],
        ["https://images.unsplash.com/photo-1603808033192-082d6919d3e1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80", "Sneakers", "₹1,999"],
        ["https://img4.dhresource.com/webp/m/0x0/f3/albu/jc/y/05/556e61a2-4e95-44d5-84b7-21244d545c47.jpg", "Ballet Flats", "₹2,799"],
        ["https://i.pinimg.com/736x/88/d6/ae/88d6aeb038c46f73a1f81dcacac85cc2.jpg", "White Sneakers", "₹2,499"],
        ["https://assets.myntassets.com/dpr_1.5,q_30,w_400,c_limit,fl_progressive/assets/images/2025/SEPTEMBER/23/XaitWalh_d720492d201640d4b663a10172210780.jpg", "Black Sneakers", "₹1,299"]
    ];

    foreach ($shoes as $item) {
        echo "<div class='item-card'>
                <img src='{$item[0]}' alt='{$item[1]}'>
                <h4>{$item[1]}</h4>
                <p><strong>Price:</strong> {$item[2]}</p>
                <form method='post' action='cart.php'>
                    <input type='hidden' name='item_name' value='{$item[1]}'>
                    <input type='hidden' name='item_price' value='{$item[2]}'>
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