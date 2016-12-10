<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
		<meta name="keywords" content=""/>
		<meta name="description" content=""/>
		<meta name="author" content="Yanick 007"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/login.css"/>
    <!--<link rel="stylesheet" href="../../public/css/global_style/footer.css"/>-->
    <!--<link rel="stylesheet" href="../../public/css/global_style/leader_info.css"/>-->
    <script src="../public/javascript/login.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <!--<script src="../../public/js/global/footer.js"></script>-->
   <!--  <script src="../../public/js/global/leader_info.js"></script>-->
    <title>Administrator</title>
  </head>
    <body>

       <header>


           <div id="adminContainer">

             <h2 id="error">Welkom op de ADMINISTRATOR pagina</h2>

               <img src="../public/images/user_avatar/adminAvatar.png" alt="" id="userAvatar">

                <div id="adding">

                   <form action="" method="post" class="changeAvatar" enctype="multipart/form-data">

                       <input type="file" name="avatar" placeholder="Avatar">

                       <input type="submit" name="updateAvatar" value="Update">

                   </form>

                  <form action="" method="post" id="avatar">


                   <input type="text" name="username" placeholder="Gebruikersnaam">
                   <input type="password" name="password" placeholder="Wachtwoord">
                   <input type="submit" name="logIn" value="Inlogen">

                  </form>

                </div>



           </div>
           <div id="parameter">

               <div class="parameters">

                   <button class="params">SLUITEN</button>
                   <button class="params"></button>

               </div>



               <button class="parameters">


               </button>

           </div>

       </header>

       <footer>



       </footer>

     </body>

     </html>
