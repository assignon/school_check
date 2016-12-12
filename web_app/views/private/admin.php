<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
		<meta name="keywords" content=""/>
		<meta name="description" content=""/>
		<meta name="author" content="Yanick 007"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/admin.css"/>
    <!--<link rel="stylesheet" href="../../public/css/global_style/footer.css"/>-->
    <!--<link rel="stylesheet" href="../../public/css/global_style/leader_info.css"/>-->
    <script src="../public/javascript/admin.js"></script>
    <script src="../public/javascript/connect.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <!--<script src="../../public/js/global/footer.js"></script>-->
   <!--  <script src="../../public/js/global/leader_info.js"></script>-->
    <title>Administrator</title>
  </head>
    <body>

       <header>

         <div id="forms">

           <form id="deleteForm" action="" method="post">

             <div id="close"><p>Sluiten</p></div>
             <h3>Danger Zone</h3>
             <input type="number" name="school_id" id="schoolId">
             <input type="text" name="school_name" id="schoolNAME">
             <input type="password" name="password" placeholder="Wachtwoord">
             <input type="submit" name="delete" value="Delete">

           </form>

         </div>



         <div id="container">

             <div id="menu">

                 <img src="" alt="" id="userAvatar">

                 <button id="grid"></button>

                 <a href="welcom.php?action=add&id=<?php echo $_SESSION['id'];?>"><button id="add">Toevogen</button></a>

                 <button id="list"></button>

                 <a href="welcom.php?action=logout" id="log"><button>Uitlogen</button></a>

             </div>

             <div id="userContainer">

               <p id="error">Welkom</p>

                <div id="listOption">



                 </div>

                 <div id="gridOption">



                 </div>

                

             </div>

         </div>

        </header>

        <footer>



        </footer>

    </body>
</html>
