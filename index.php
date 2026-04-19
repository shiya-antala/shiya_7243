<?php 
include 'config.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Shopping Categories</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
body {
    font-family: 'Segoe UI', sans-serif;
    background: #f5f5f5;
    margin: 0;
}

/* HEADER */
.header {
    background-color: #4CAF50;
    color: white;
    padding: 20px;
    text-align: center;
    font-size: 26px;
    font-weight: bold;
    position: relative;
}

/* TOP RIGHT BUTTONS */
.top-buttons {
    position: absolute;
    right: 20px;
    top: 20px;
}

.top-buttons a {
    background: white;
    color: #4CAF50;
    padding: 8px 15px;
    margin-left: 10px;
    border-radius: 6px;
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
    transition: 0.3s;
}

.top-buttons a:hover {
    background: #2E7D32;
    color: white;
}

/* GRID */
.container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
    max-width: 900px;
    margin: 50px auto;
    padding: 0 15px;
}

/* CATEGORY BOX */
.box {
    background-color: white;
    height: 120px;
    border-radius: 15px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-size: 18px;
    font-weight: bold;
    color: #333;
    text-decoration: none;
    transition: 0.3s;
}

.box span {
    font-size: 28px;
    margin-bottom: 8px;
}

.box:hover {
    background-color: #4CAF50;
    color: white;
    transform: scale(1.05);
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .container {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 500px) {
    .container {
        grid-template-columns: 1fr;
    }
}
</style>

</head>

<body>

<!-- HEADER -->
<div class="header">
    🛒 Welcome to Our Shopping Zone

    <div class="top-buttons">
        <a href="cart.php">🛒 Cart</a>
        <a href="logout.php">🚪 Logout</a>
    </div>
</div>

<!-- CATEGORY SECTION -->
<div class="container">

    <a class="box" href="Jewelry.php">
        <span>💎</span>
        Aesthetic Jewelry
    </a>

    <a class="box" href="Cloth.php">
        <span>👗</span>
        Clothes
    </a>

    <a class="box" href="Shoes.php">
        <span>👟</span>
        Shoes
    </a>

    <a class="box" href="Babycloth.php">
        <span>🧸</span>
        Baby Clothes
    </a>

    <a class="box" href="Toy.php">
        <span>🎮</span>
        Toys
    </a>

    <a class="box" href="Cosmetics.php">
        <span>💄</span>
        Cosmetics
    </a>

</div>

</body>
</html>