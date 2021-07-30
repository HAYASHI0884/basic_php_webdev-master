<?php
  
  require('../app/functions.php');

  $colors = filter_input(INPUT_GET, 'colors', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);

  if(empty($colors)) {
    echo 'None selected';
  } else {
    $colors = implode(" , ", $colors);
  }

  include('../app/_parts/_header.php');

?>

<p><?= h($colors); ?></p>
<p><a href="index.php">Go back</a></p>

<?php

include('../app/_parts/_footer.php');