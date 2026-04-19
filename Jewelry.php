<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aesthetic Jewelry</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome for cart icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #fff8f2;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        h2 {
            margin-top: 30px;
            font-size: 28px;
            color: #8B0000;
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
            background-color: #FF4081;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
        }
        .item-card button:hover {
            background-color: #e73370;
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

<h2>💍 Aesthetic Jewelry</h2>
<p>All kinds of stylish jewelry items listed here.</p>

<div class="gallery">
    <?php
    $jewelry = [
        ["https://jewelsmars.com/cdn/shop/files/2E6208A2-8E3C-4661-B602-039ABE6B96A5.jpg?v=1747260602&width=1946", "Necklace", "₹799"],
        ["https://sircona.nl/cdn/shop/files/IMG-6489.jpg?v=1702058601", "Earrings", "₹499"],
        ["https://cdn.shopify.com/s/files/1/0634/8475/6168/files/O1CN010TOSPP2MW1tGxALQb__2218188989834-0-cib.jpg?v=1746179674", "Ring", "₹599"],
        ["https://5.imimg.com/data5/SELLER/Default/2025/2/490812280/HV/PT/EF/78889470/i-2024-07-29-071610-0000-500x500.png", "Diamond Bracelet", "₹1,499"],
        ["https://myjewelcharms.com/cdn/shop/files/rn-image_picker_lib_temp_7d5c6320-1650-439e-a437-1f536c3a2567.jpg?v=1746190393", "Silver Anklet", "₹699"],
        ["https://www.giva.co/cdn/shop/files/PD01335_1_157a015b-84f1-44e5-80b8-ea57e35b3cba.jpg?v=1733144485", "Rose Gold Pendant", "₹899"],
        ["https://img.drz.lazcdn.com/static/bd/p/debe2f3b2f055112370810080668f62a.jpg_960x960q80.jpg_.webp", "Boho Earrings", "₹449"],
        ["https://img.ltwebstatic.com/images3_pi/2020/09/14/160005331921069b54979ad3af8c6c21c72c1de87b_thumbnail_405x552.jpg", "Layered Chain", "₹349"],
        ["https://img.joomcdn.net/d279c1d0c5ee507bc1af9199a636904d83397e83_original.jpeg", "Charm Bracelet", "₹399"],
        ["https://www.thejewelbox.in/cdn/shop/files/BigFlowerShapedOxidisedGermanSilverFingerRing-TheJewelbox-1.png?v=1691349877&width=533", "Statement Ring", "₹499"],
        ["https://i.etsystatic.com/32012008/r/il/c0c748/5302336799/il_340x270.5302336799_5wcs.jpg", "Vintage Necklace", "₹1,199"],
        ["https://images.meesho.com/images/products/317090615/iz84u_512.webp", "Studded Bangle", "₹599"]
    ];

    foreach ($jewelry as $item) {
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
