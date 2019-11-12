<?php

include 'src/utils/insert_into_cart.php';

if ($_POST['item'] && $_POST['number'])
 insert_into_cart($_POST['item'], $_POST['number']);

?>

<div class="items">
  <img src="https://image.shutterstock.com/image-photo/funny-brown-puppy-mixed-breed-450w-1310120878.jpg" title="Dog Lovers">
  <div>
    <p><h2>Dog Lovers</h2>This isnt even a book anymore, but i'll sell it to you</p>
    <form action="" method="POST">
      <input type="radio" name="item" value="NDL" checked>
      <input type="text" name="number" value="">
      <input type="submit" name="buy" value="Add to Cart">
  	</form>
  </div>
</div>
<div class="items">
  <img src="https://images.randomhouse.com/cover/700jpg/9780812996791" title="MARCO!!!POLO!!!!!!!!!!">
  <div>
    <p><h2>Wheres waldo</h2>WATER POLO!</p>
    <form action="" method="POST">
      <input type="radio" name="item" value="NIB" checked>
      <input type="text" name="number" value="">
      <input type="submit" name="buy" value="Add to Cart">
  	</form>
  </div>
</div>
<div class="items">
  <img src="http://4.bp.blogspot.com/-Y7QfaE8SLro/VKC0S8sJQNI/AAAAAAAAmFE/qfty3IKCNLk/s1600/Jacket%2B(12).jpg" title="Snakes">
  <div>
    <p><h2>dude im a book</h2>Food facts for fun</p>
    <form action="" method="POST">
      <input type="radio" name="item" value="NFS" checked>
      <input type="text" name="number" value="">
      <input type="submit" name="buy" value="Add to Cart">
  	</form>
  </div>
</div>
