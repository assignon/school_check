<?php

  session_start();
  $_SESSION = array();
  session_destroy();
  header("Location: welcom.php?action=login");

 ?>
