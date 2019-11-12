<?php
include 'src/utils/insert_into_cart.php';

function delete_user($user_name)
{
    $conn = connect_mysql();
    /*delete*/
    $sql = "DELETE FROM users WHERE login = '$user_name'";
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}

if ($_POST['login'] && $_POST['submit'] == "delete")
{
    delete_user($_POST['login']);
    echo "<script type='txt/javascript'>document.location.href='{http://localhost:8080/newrush/index.php?page=admin}';</script>";
}
?>
