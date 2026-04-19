<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fun Toys</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome for cart icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #fff5e6;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        h2 {
            margin-top: 30px;
            font-size: 28px;
            color: #e67e22;
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
            background-color: #f39c12;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
        }
        .item-card button:hover {
            background-color: #e67e22;
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

<h2>🧸 Fun Toys</h2>
<p>Amazing toys for kids of all ages - from educational to entertainment!</p>

<div class="gallery">
    <?php
    $toys = [
        ["https://www.lego.com/cdn/cs/set/assets/blt476547efc6c46393/10325_alt1.png?fit=crop&quality=80&width=400&height=400&dpr=1", "LEGO Building Set", "₹2,999"],
        ["https://samstoy.in/cdn/shop/files/ahmedabad-gifts-large-plush-teddy-bear-for-gift-for-all-age-in-ahmedabad-gujarat-pale-blue-giant-bookshelf-girl-hugging.jpg?v=1756754558&width=1445", "Teddy Bear", "₹1899"],
        ["https://m.media-amazon.com/images/I/81ap+We87nL._AC_UF1000,1000_QL80_.jpg", "Remote Control Car", "₹1,799"],
        ["https://www.shutterstock.com/shutterstock/photos/594123335/display_1500/stock-vector-jigsaw-puzzle-game-with-kids-in-park-illustration-594123335.jpg", "Puzzle Game", "₹999"],
        ["https://funblast.in/cdn/shop/files/81Bd2vx4UTL._SL1500.jpg?v=1693215134", "Building Blocks", "₹1,299"],
        ["https://m.media-amazon.com/images/I/61Rh0idS79L.jpg", "Plush Toy", "₹159"],
        ["https://www.jiomart.com/images/product/original/rvcysvgbv7/humaira-avengers-super-hero-action-figure-toy-for-kids-boys-5-inch-pack-of-5-product-images-orvcysvgbv7-p597462317-0-202301101543.jpg?im=Resize=(1000,1000)", "Action Figure", "₹999"],
        ["https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-NEFufZJ2QublYq_DZF6vy5USqM4lqEka5Q&s", "Educational Toy", "₹1,499"],
        ["https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcScXFUAC53BHGXCbE4x33F8rCchCaIf_8hyZBhSanKNk8DMa3LT", "Soft Doll", "₹649"],
        ["https://m.media-amazon.com/images/I/61129ijYlfL._AC_UF1000,1000_QL80_.jpg", "Racing Car Set", "₹2,199"],
        ["https://truewholesale.in/storage/product-images/17231947030.jpg", "Creative Kit", "₹1,699"],
        ["https://m.media-amazon.com/images/I/813J0DBqCTL._AC_UF1000,1000_QL80_.jpg", "Board Game", "₹1799"]
    ];

    foreach ($toys as $item) {
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