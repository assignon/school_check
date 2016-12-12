<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
		<meta name="keywords" content=""/>
		<meta name="description" content=""/>
		<meta name="author" content="Yanick 007"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/gegevens.css"/>
    <!--<link rel="stylesheet" href="../../public/css/global_style/footer.css"/>-->
    <!--<link rel="stylesheet" href="../../public/css/global_style/leader_info.css"/>-->
    <script src="../public/javascript/gegevens.js"></script>
    <script src="../public/javascript/connect.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <!--<script src="../../public/js/global/footer.js"></script>-->
   <!--  <script src="../../public/js/global/leader_info.js"></script>-->
    <title>Administrator</title>
  </head>
    <body>

       <header>

          <a href="welcom.php?action=admin&id=<?php echo $_SESSION['id'];?>"><button>Naar de admin Page</button></a>
          <h2 id="info">Hier kunnen jullie de data's controlleren en als alles kloppen, kunnen jullie door op de onderstaan knop(waar upload staat) online weergeven</h2>

          <div id="datas">

            <h2 id="error"></h2>


          </div>

       </header>

    </body>

</html>
