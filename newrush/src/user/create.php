<?php
/*database info.*/
$host = 'localhost:8889';
$user = 'root';
$pass = 'root';
$dbname = 'testdb4';

include 'src/utils/connect_mysql.php';

if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] && $_POST['submit'] == "Create")
{
    /*connnect database*/
   // $conn = mysqli_connect($host, $user, $pass, $dbname);
   // if(!$conn){
   //     die('Could not connect: '.mysqli_connect_error());
   // }
   //echo 'Database Connected successfully\n';

    $conn = connect_mysql();

    $login = $_POST['login'];
    $passwd = hash('whirlpool', $_POST['passwd']);

    $login_query = mysqli_query($conn, "SELECT * FROM `users`");

    $flag = 1;
    while ($row = mysqli_fetch_array($login_query)) {
        if ($row['login'] == $login) {
            echo "Login is already in use";
            $flag = 0;
        }
    }
    if ($flag === 1) {
        echo "Success!!!";
        $Query = mysqli_query($conn, "INSERT INTO `users` (login, passwd) VALUES ('$login', '$passwd')");
    }
    else
      echo " FAIL!!!";
    mysqli_close($conn);
}
?>

<div>
  <h2>Welcome New friend</h2>
    <form action="" method="POST">
        Username: <input type="text" name="login" value="">
        <br>
        Password: <input type="password" name="passwd" value="">
        <br>
        <input type="submit" name="submit" value="Create" class="btn">
    </form>
</div>
