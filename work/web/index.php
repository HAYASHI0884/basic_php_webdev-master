<!DOCTYPE html>
<?php
  
  require('../app/functions.php');

  $names = [
    "Taro", "Jiro", "Saburo",
  ]
?>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>PHP Practice</title>
</head>
<body>
  <ul>
    <?php if (empty($names)): ?>
      <li>Nobady!</li>
    <?php else: ?>
      <?php foreach ($names as $name) :?>
        <li><?= h($name); ?></li>
      <?php endforeach; ?>
    <?php endif; ?>
  </ul>
</body>
</html>