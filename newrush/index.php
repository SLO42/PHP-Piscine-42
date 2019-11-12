<?php
  session_start();
  if ($_GET['page'] == "")        $page = "src/home.php";
  if ($_GET['page'] == "create")  $page = "src/user/create.php";
  if ($_GET['page'] == "login")   $page = "src/user/login.php";
  if ($_GET['page'] == "logout")  $page = "src/user/logout.php";
  if ($_GET['page'] == "admin")   $page = "src/user/admin.php";
  if ($_GET['page'] == "delete")  $page = "src/user/delete.php";
  if ($_GET['page'] == "cart")    $page = "src/cart/cart.php";
  if ($_GET['page'] == "modify")  $page = "src/cart/modif_cart.php";
  if ($_GET['page'] == "thanks")  $page = "src/cart/thanks.php";
  if ($_GET['page'] == "nfiction")   $page = "src/items/nfiction.php";
  if ($_GET['page'] == "fiction")   $page = "src/items/fiction.php";
  if ($_GET['page'] == "gifts")   $page = "src/items/gifts.php";
  include("install.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Welcome</title>
  <link href="css/index.css" rel="stylesheet" type"text/css">
  <link href="css/items.css" rel="stylesheet" type"text/css">
</head>
<body>
  <div class="main_field">
    <header class="header">
      <div></div>
      <div class="user">
        <div class="icon" title="cart">
          <!-- <a href="index.php?page=cart"><img src="https://upload.wikimedia.org/wikipedia/commons/5/50/ShoppingCart.svg"></a> -->
          <a href="index.php?page=cart"><img src="https://cdn3.iconfinder.com/data/icons/everything-you-need/40/Shopping_cart-512.png"></a>
        </div>
        <div class="icon" id="usr" title="user">
          <?php
            if ($_SESSION['loggued_on_user'] == "")
              echo "<a href=\"index.php?page=login\">Login</a>";
            else{
              echo "<a href=\"index.php?page=logout\">".$_SESSION['loggued_on_user']."</a>";
            }
          ?>
        </div>
      </div>
    </header>
    <div class="container">
    <div class="admin">
      <?php
        if ($_SESSION['loggued_on_user'] == "admin")
          echo "<a href=\"index.php?page=admin\">only for admin</a>";
      ?>
    </div>
    <?php include $page; ?>
  </div>
</div>
  <div class="menu">
    <div class="logo"><a href="index.php"><img src="http://chittagongit.com/images/home-icon-png/home-icon-png-11.jpg"></a></div>
    <ul><a href="index.php?page=nfiction">nfiction</a></ul>
    <ul><a href="index.php?page=fiction">fiction</a></ul>
    <ul><a href="index.php?page=gifts">gifts</a></ul>
  </div>
</body>
</html>
