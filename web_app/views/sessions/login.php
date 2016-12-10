<?php

  require "../web_app/models/login_model.php";

  $login = new login_model();
  include "../web_app/views/private/login.php";

  $login->insert_users();
  $login->users_inlog();
  $login->change_avatar('../public/images/user_avatar',30000);
  $login->display_user_avatar();


 ?>
