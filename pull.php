<?php
if ($_GET['run']) {
  # This code will run if ?run=true is set.
  exec("/path/to/name.sh");
}
?>

<!-- This link will add ?run=true to your URL, myfilename.php?run=true -->
<a href="?run=true">Click Me!</a>