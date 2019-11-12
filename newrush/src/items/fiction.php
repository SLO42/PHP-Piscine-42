<?php

include 'src/utils/insert_into_cart.php';

if ($_POST['item'] && $_POST['number'])
 insert_into_cart($_POST['item'], $_POST['number']);

?>

<div class="items">
  <img src="https://image.shutterstock.com/z/stock-vector-abstract-composition-black-and-white-font-texture-quadrate-construction-white-a-brochure-title-414777820.jpg" title="Fancy Limited">
  <div>
    <p><h2>Fiction</h2>A book where someone probably is stolen by books!!  </p>
    <form action="" method="POST">
      <input type="radio" name="item" value="FBT" checked>
      <input type="text" name="number" value="">
      <input type="submit" name="test" value="Add to Cart">
  	</form>
  </div>
</div>
<div class="items">
  <img src="https://image.shutterstock.com/z/stock-vector-pop-art-style-comic-book-panel-doubtful-wondering-woman-can-t-tell-reality-from-fantasy-717504940.jpg" title="IS IT ME?">
  <div>
    <p><h2>Fiction</h2>TL;DR: Everyone Pretty much dies</p>
    <form action="" method="POST">
      <input type="radio" name="item" value="FGOT" checked>
      <input type="text" name="number" value="">
      <input type="submit" name="buy" value="Add to Cart">
  	</form>
  </div>
</div>
<div class="items">
  <img src="https://image.shutterstock.com/image-photo/bewitched-book-magic-glows-darkness-450w-393367726.jpg" title="Harry poter">
  <div>
    <p><h2>Fiction</h2>"Harry made me do it": The book</p>
    <form action="" method="POST">
      <input type="radio" name="item" value="FHP" checked>
      <input type="text" name="number" value="">
      <input type="submit" name="buy" value="Add to Cart">
  	</form>
  </div>
</div>
