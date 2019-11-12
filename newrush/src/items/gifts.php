<?php

include 'src/utils/insert_into_cart.php';

if ($_POST['item'] && $_POST['number'])
 insert_into_cart($_POST['item'], $_POST['number']);

?>

<div class="items">
  <img src="https://media.giphy.com/media/3o7P4F86TAI9Kz7XYk/giphy.gif" title="Salty Gif">
  <div>
    <p><h2>Giffts</h2>Doing the salt shake</p>
    <form action="" method="POST">
      <input type="radio" name="item" value="Sgif" checked>
      <input type="text" name="number" value="">
      <input type="submit" name="test" value="Add to Cart">
  	</form>
  </div>
</div>
<div class="items">
  <img src="https://media.giphy.com/media/xT1XGKfc0gwXshqA80/giphy.gif" title="More Cowbell">
  <div>
    <p><h2>Gifz</h2>Can stop Won't Stop</p>
    <form action="" method="POST">
      <input type="radio" name="item" value="Cgif" checked>
      <input type="text" name="number" value="">
      <input type="submit" name="buy" value="Add to Cart">
  	</form>
  </div>
</div>
<div class="items">
  <img src="https://media.giphy.com/media/l4q8k68dSCkWam8tG/giphy.gif" title="no">
  <div>
    <p><h2>Gif</h2>Do not Purchase this!</p>
    <form action="" method="POST">
      <input type="radio" name="item" value="Ngif" checked>
      <input type="text" name="number" value="">
      <input type="submit" name="buy" value="Add to Cart">
  	</form>
  </div>
</div>
