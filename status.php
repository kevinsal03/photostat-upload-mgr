<?php
#script for uploading new file
require 'config.php'; #config variables

?>
<!DOCTYPE html>
<html>
<head>
  <title>[<?php echo($env) ?>] PSUP Status Page</title>
</head>
<body>
  <h3>PSUP Satus</h3>
  <p>Environment: <?php echo($env)?></p>
  <p>Storage Location: <?php echo($storage)?></p>
  <?php if ($env == 'prod') {
    echo("<p>Production Build Time: " . $prodBT . "</p>");
  } ?>
</body>
</html>
