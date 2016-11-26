<?php

  require "../web_app/models/login_model.php";

  $login = new login_model();
  require "../web_app/views/private/login.php";

  $login->insert_users();
  $login-> users_inlog();


 ?>
