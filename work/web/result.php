<?php
  
  require('../app/functions.php');

  $color = Filter_input(INPUT_GET, 'color');
  
  if(isset($color)) {
    $color;
  } else {
    $color = 'transparent';
  }

  include('../app/_parts/_header.php');

?>

<p><?= h($color); ?></p>
<p><a href="index.php">Go back</a></p>

<?php

include('../app/_parts/_footer.php');