
<div>
    <h1>Thank you for paying for your stuff!</h1>
    <a href="index.php">RETURN FOR MORE USELESS stuff</a>
</div>
<script>
<?php
include 'src/utils/insert_into_cart.php';
$conn = connect_mysql();
$result = mysqli_query($conn, "DROP TABLE IF EXISTS `cart`");
?>
</script>
