<?php

$item_names = $_POST['item_name'] ?? [];
$prices = $_POST['price'] ?? [];
$qtys = $_POST['quantity'] ?? [];

$total = 0;
?>

<h2>Billing Summary</h2>

<table border="1">
<tr>
    <th>Item</th>
    <th>Price</th>
    <th>Qty</th>
    <th>Subtotal</th>
</tr>

<?php for ($i = 0; $i < count($item_names); $i++) {
    $subtotal = $prices[$i] * $qtys[$i];
    $total += $subtotal;
?>
<tr>
    <td><?php echo $item_names[$i]; ?></td>
    <td><?php echo $prices[$i]; ?></td>
    <td><?php echo $qtys[$i]; ?></td>
    <td><?php echo $subtotal; ?></td>
</tr>
<?php } ?>

<tr>
    <td colspan="3"><b>Total</b></td>
    <td><b>₹<?php echo $total; ?></b></td>
</tr>
</table>