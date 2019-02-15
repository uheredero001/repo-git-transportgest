<?php
  session_start();
  session_destroy();
  header("Location: ../GUI/index.html")
?>
