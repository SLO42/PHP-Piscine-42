<?php
session_start();
include 'src/utils/insert_into_cart.php';

if ($_SESSION['loggued_on_user'] !== "")
{
    unset($_SESSION['loggued_on_user']);
    $conn = connect_mysql();
    $sql = "DELETE FROM `cart`";

    /*delete action*/
    if (mysqli_query($conn, $sql)) {
        echo "Logged out successfully";
    } else {
        echo "error Logging out: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    echo "<script type='txt/javascript'>document.location.href='{http://localhost:8080/newrush/index.php}';</script>";
}
else
{
    echo "ERROR\n";
}
?>
