<?php
  // Use in the "Post-Receive URLs" section of your GitHub repo.
  shell_exec( 'cd /home/doesborg/www/maxentius && git pull' );
  echo 'voila';
  // test
?>

