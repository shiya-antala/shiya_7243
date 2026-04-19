<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>🍼 Baby Clothes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #fff0f5;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        h2 {
            margin-top: 30px;
            font-size: 28px;
            color: #8B008B;
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
            height: 350px;
            object-fit: cover;
            border-radius: 8px;
        }
        .item-card form {
            margin-top: 10px;
        }
        .item-card button {
            background-color: #FF69B4;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            transition: 0.3s;
        }
        .item-card button:hover {
            background-color: #c2185b;
        }
        .item-card h4 {
            margin: 10px 0 5px;
            font-size: 18px;
            color: #333;
        }
        .item-card p {
            font-size: 16px;
            color: #c2185b;
            margin: 5px 0 10px;
        }
        .back-link {
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

<h2>🍼 Baby Clothes</h2>
<p>Soft, comfortable clothes for babies.</p>

<a class="back-link" href="index.php">🔙 Back to Home</a>

<div class="gallery">
<?php
$baby_clothes = [
    ["https://snugglehunnykids.com.au/cdn/shop/files/golden-flower-short-sleeve-organic-bodysuit-973483_f7ec7dca-6015-44d1-9578-0ef8a74df496.jpg?v=1689507567", "Baby Bodysuit", 999],
    ["https://myneemoe.in/cdn/shop/files/WhatsAppImage2024-04-13at23.03.06_cleanup-5.jpg?v=1725699657&width=533", "Newborn Set", 2500],
    ["https://5.imimg.com/data5/SELLER/Default/2024/4/407457827/DD/CP/OO/4912920/kids-rompers-suit-500x500.jpg", "Full Sleeve Romper", 899],
    ["https://www.shopmilaandco.com/cdn/shop/files/SAP4405.jpg?v=1738613305", "Sleeveless Jumpsuit", 999],
    ["https://shortiebear.co.uk/wp-content/uploads/2023/10/Waffle-Bear-T-Shirt-Shorts-Set-Beige2-1.jpg", "T-Shirt & Shorts", 899],
    ["https://img4.dhresource.com/webp/m/f3/albu/jc/g/05/e67e0fff-4568-4a23-8770-af21a4ef6b7e.jpg", "Cute Overalls", 999],
    ["https://www.bownbee.com/cdn/shop/files/BS25IN18PIA1.jpg?v=1748604949", "Indo Western", 1100],
    ["https://i.pinimg.com/736x/54/72/91/5472911e289c039b4af068077534c87a.jpg", "Floral Frock", 1200],
    ["https://www.huggalugs.com/cdn/shop/files/flower-cardigan-sweater-baby-toddler-794920_1200x.jpg?v=1750953404", "Warm Wool Set", 1299],
    ["https://i.etsystatic.com/24582521/r/il/d66556/3777136321/il_570xN.3777136321_gyml.jpg", "Colorful Onesie", 900],
    ["https://i5.walmartimages.com/asr/34ab406c-da9b-49d1-a7af-bddf1aeebe02.9a19678fcc72542134b1faf9a2ac48c7.jpeg", "Cartoon Sleepwear", 1500],
    ["https://i.pinimg.com/736x/0e/9f/a8/0e9fa8079d27cd6db23af2a47aa0a980.jpg", "Shorts pair", 749]
];

foreach ($baby_clothes as $item) {
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

</body>
</html>
