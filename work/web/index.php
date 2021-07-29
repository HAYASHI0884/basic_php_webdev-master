<!DOCTYPE html>
<?php
  
  require('../app/functions.php');

  include('../app/_parts/_header.php');

  $names = [
    "Taro", "Jiro", "Saburo",
  ]
?>

  <ul>
    <?php if (empty($names)): ?>
      <li>Nobady!</li>
    <?php else: ?>
      <?php foreach ($names as $name) :?>
        <li><?= h($name); ?></li>
      <?php endforeach; ?>
    <?php endif; ?>
  </ul>

<?php

include('../app/_parts/_footer.php');